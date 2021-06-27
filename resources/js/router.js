import home from "./home";
import VueRouter from 'vue-router'
import ListPost from "./ListPost";
import PostItemDetail from "./components/PostItemDetail";
import ListPostByTopic from "./components/ListPostByTopic";
import ListPostByUser from "./components/ListPostByUser";
import NotFound from "./components/NotFound";
const routes = [
    {path: '/', component:ListPost, name: 'posts.index'},
    {path: '/posts/:id', component:PostItemDetail, name: 'posts.show'},
    {path: '/topics/:slug/posts', component:ListPostByTopic, name: 'topics.posts'},
    {path: '/user/:id/posts', component:ListPostByUser, name: 'user.posts'},
    {path: '*', component: NotFound, name:'404'}
];

const router = new VueRouter({
    routes,
    mode: 'history'
})

export default router
