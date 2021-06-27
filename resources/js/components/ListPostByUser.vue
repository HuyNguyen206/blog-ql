<template>
    <div>
        <div v-if="$apollo.loading">
            Loading...
        </div>
        <div v-else>
            <h1 class="text-3xl mb-2">
                <router-link class="text-gray-400" :to="{name:'posts.index'}">All Post</router-link> / <span>{{user.name}}</span>
            </h1>
            <div>
                <PostItem v-for="(post, index) in user.posts" :post="post" :key="index" class="card mt-4"></PostItem>
            </div>
        </div>
    </div>
</template>

<script>
import gql from "graphql-tag"
import PostItem from "./PostItem";
export default {
    name: "ListPostByUser",
    components: {PostItem},
    //   apollo: {
    //       world: gql`query {
    //   world: hello
    // }`
    //   }

    apollo: {
        user: {
            query: gql`query($id: ID!){
          user(id: $id){
            id
            name
            posts{
             id
             title
             lead
             created_at
             user{
             name
             id
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
                    id: this.$route.params.id
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
