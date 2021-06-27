<template>
    <div>
        <div v-if="$apollo.loading">Loading...</div>
        <div v-else>
            <div class="text-lg text-gray-600">By <router-link class="underline hover:text-gray-900" :to="{name:'user.posts', params:{id: post.user.id}}">{{post.user.name}}</router-link>
                in <router-link class="underline hover:text-gray-900" :to="{name: 'topics.posts', params:{slug:post.topic.slug}}">{{post.topic.name}}</router-link> on {{ post.created_at }}</div>
            <h1 class="text-5xl mt-10 font-bold mb-12">{{post.title}}</h1>
            <p class="text-gray-700 pb-3 mb-12 whitespace-pre-line" v-html="post.content">
            </p>
            <div class="mb-24 flex items-center">
                <div class="mr-6">
                    <img :src="post.user.latestAvatar" alt="author avatar" class="w-16 h-16 rounded-full">
                </div>
                <div class="flex flex-col">
                    <div class="text-xl text-gray-600">
                        Written by  <router-link class="underline hover:text-gray-900" :to="{name:'user.posts', params:{id: post.user.id}}">{{post.user.name}}</router-link>
                    </div>
                    <div class="text-gray-600">
                        Published in <router-link class="underline hover:text-gray-900" :to="{name: 'topics.posts', params:{slug:post.topic.slug}}">{{post.topic.name}}</router-link> on {{ post.created_at }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import gql from "graphql-tag"

export default {
    name: "PostItemDetail",
    apollo: {
        post: {
            query: gql`query($id: ID!){
                post(id: $id){
                id
                title
                content
                created_at
                user{
                     id
                     name
                     email
                     latestAvatar
                    }
                topic{
                      name
                      slug
                     }
                }
}`,
            variables(){
                return {
                    id: this.$route.params.id
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
