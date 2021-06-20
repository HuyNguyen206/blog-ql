import home from "./home";
import VueRouter from 'vue-router'
import post from "./post";
const routes = [
    {path: '/', component:home, name: 'home'},
    {path: '/post/:id', component:post, name: 'posts.show'}
];

const router = new VueRouter({
    routes
})

export default router
