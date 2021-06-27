<template>
    <div>
        <h1 class="text-3xl font-bold mb-2">
            All the posts
        </h1>
        <div v-if="$apollo.queries.posts.loading">
            The posts is loading
        </div>
        <div v-else>
            <PostItem v-for="(post, index) in posts" :post="post" :key="index" class="card mt-4"></PostItem>
        </div>
    </div>
</template>

<script>
import gql from "graphql-tag"
import PostItem from "./components/PostItem";
export default {
    name: "ListPost",
    components: {PostItem},
  //   apollo: {
  //       world: gql`query {
  //   world: hello
  // }`
  //   }

    apollo: {
        posts: gql`query
        {
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
            name
            slug
            }
           }
        }
      `
    }
}
</script>

<style scoped>

</style>
