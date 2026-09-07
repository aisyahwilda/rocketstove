<template>
    <section
        ref="sectionRef"
        class="rocket-stove-section"
        :class="{ 'is-visible': isVisible }"
        aria-labelledby="rs-heading"
    >
        <span class="rs-orb rs-orb--one" aria-hidden="true"></span>
        <span class="rs-orb rs-orb--two" aria-hidden="true"></span>

        <div class="container mx-auto px-6 lg:px-16">
            <div class="rs-layout">
                <figure
                    class="rs-image-wrap"
                    role="img"
                    aria-label="Rocket Stove"
                >
                    <img
                        src="/images/rocket-stove.png"
                        alt="Rocket Stove"
                        class="rs-image"
                    />
                </figure>

                <div class="rs-content">
                    <h2 id="rs-heading" class="rs-heading">
                        Apa Itu Rocket Stove?
                    </h2>

                    <p class="rs-description">
                        Rocket Stove adalah alat pembakaran sampah yang membantu
                        proses pembakaran menjadi lebih terarah dan tidak
                        langsung menyebarkan asap ke sekitar.
                    </p>

                    <ul class="rs-feature-list" role="list">
                        <li
                            v-for="item in features"
                            :key="item.id"
                            class="rs-feature-item"
                            :style="{ '--delay': `${item.id * 90}ms` }"
                        >
                            <span class="rs-feature-icon" aria-hidden="true">
                                <component :is="item.icon" class="rs-icon" />
                            </span>
                            <span class="rs-feature-text">
                                <strong class="rs-feature-title">{{
                                    item.title
                                }}</strong>
                                <span class="rs-feature-desc">{{
                                    item.description
                                }}</span>
                            </span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Flame, Zap, Trash2, Leaf } from "lucide-vue-next";
import { onBeforeUnmount, onMounted, ref } from "vue";

const sectionRef = ref(null);
const isVisible = ref(false);
let sectionObserver = null;

const features = [
    {
        id: 0,
        title: "Asap Lebih Terarah",
        description:
            "Asap keluar lewat cerobong, jadi tidak langsung kena orang di sekitar.",
        icon: Flame,
    },
    {
        id: 1,
        title: "Pembakaran Lebih Maksimal",
        description:
            "Api lebih stabil, jadi sampah lebih cepat habis terbakar.",
        icon: Zap,
    },
    {
        id: 2,
        title: "Membantu Pengelolaan Sampah",
        description: "Cocok untuk sampah rumah tangga agar tidak menumpuk.",
        icon: Trash2,
    },
    {
        id: 3,
        title: "Lebih Ramah Lingkungan",
        description: "Lingkungan terasa lebih bersih dan nyaman untuk warga.",
        icon: Leaf,
    },
];

onMounted(() => {
    const node = sectionRef.value;
    if (!node) return;

    sectionObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    isVisible.value = true;
                    sectionObserver.disconnect();
                }
            });
        },
        { threshold: 0.2 },
    );

    sectionObserver.observe(node);
});

onBeforeUnmount(() => {
    if (sectionObserver) {
        sectionObserver.disconnect();
    }
});
</script>
