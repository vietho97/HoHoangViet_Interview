<template>
    <div class="container">
        <LoginComponent />
    </div>
</template>

<script>
import LoginComponent from "./LoginComponent.vue";

export default {
    components: {
        LoginComponent,
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
