<template>
    <div>
        <div class="card-header">
            <router-link :to="{name: 'posts.show', params:{id: post.id}}" class="text-xl font-semibold hover:underline"> {{post.title}}</router-link>
        </div>
        <div class="card-body mt-1">
            <p class="text-gray-700">{{post.lead}}</p>
            <span class="text-gray-500 mt-1">
                By <router-link class="underline hover:text-gray-900" :to="{name:'user.posts', params:{id: post.user.id}}">{{post.user.name}}</router-link> in
                <router-link class="underline hover:text-gray-900" :to="{name: 'topics.posts', params:{slug:post.topic.slug}}">{{post.topic.name}}</router-link> on {{ post.created_at | timeago}}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostItem",
    props: ['post']
}
</script>

<style scoped>

</style>
