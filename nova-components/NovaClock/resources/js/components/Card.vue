<template>
    <card class="flex flex-col items-center justify-center">
        <digital-clock :blink="card.blink" :displaySeconds="card.displaySeconds"/>
<!--        <div class="px-3 py-3">-->
<!--            <h1 class="text-center text-3xl text-80 font-light">Nova Clock</h1>-->
<!--        </div>-->
    </card>
</template>

<script>

    import DigitalClock from "vue-digital-clock";

export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],
    components: {
        DigitalClock
    },

    mounted() {

    },
}
</script>
