<template>
    <div>
        <div v-if="$apollo.loading">
            Loading...
        </div>
        <div v-else>
            <h1 class="text-3xl mb-2">
                <router-link class="text-gray-400" :to="{name:'posts.index'}">All Post</router-link> / <span>{{topic.name}}</span>
            </h1>
            <div>
                <PostItem v-for="(post, index) in topic.posts" :post="post" :key="index" class="card mt-4"></PostItem>
            </div>
        </div>
    </div>
</template>

<script>
import gql from "graphql-tag"
import PostItem from "./PostItem";
export default {
    name: "ListPostByTopic",
    components: {PostItem},
    //   apollo: {
    //       world: gql`query {
    //   world: hello
    // }`
    //   }

    apollo: {
        topic: {
            query: gql`query($slug: String!){
          topic(slug: $slug){
            id
            name
            slug
            user{
             name
             id
            }
            posts{
             id
             title
             lead
             created_at
             user{
             id
             name
             }
             topic{
             slug
             name
             }
            }
           }
   }
      `,
            variables(){
                return {
                    slug: this.$route.params.slug
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
