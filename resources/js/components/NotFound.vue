<template>
<div class="h-screen bg-gray-200 text-center text-gray-600 flex flex-col justify-center relative">
        <h1 class="text-6xl text-shadow">404</h1>
        <h3 class="text-4xl text-shadow">This page can not be found!</h3>
    <footer class="absolute left-1/2 transform -translate-x-1/2 bottom-5 text-gray-500"> Take me back to
        <a href="#" class="text-gray-900" @click.prevent="$router.go(-1)">where i was</a> </footer>
</div>
</template>

<script>
export default {
name: "NotFound"
}
</script>

<style scoped>

</style>
