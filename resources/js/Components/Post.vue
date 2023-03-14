<script setup>
import { computed, toRefs, reactive } from 'vue';
import {Link, router } from '@inertiajs/vue3'

import AccountMultiple from 'vue-material-design-icons/AccountMultiple.vue';
import ThumbUp from 'vue-material-design-icons/ThumbUp.vue'
import Check from 'vue-material-design-icons/Check.vue'
import Delete from 'vue-material-design-icons/Delete.vue'
import Image from 'vue-material-design-icons/Image.vue';

import { useGeneralStore } from '@/stores/general';
import { storeToRefs } from 'pinia';

const useGeneral = useGeneralStore()
const { isImageDisplay } = storeToRefs(useGeneral)

const form = reactive({ comment: null, likes: null})


const props = defineProps({
  user: Object,
  post: Object,
  comments: Object,
  likes: Object
})

const {post, user, comments, likes } = toRefs(props)

const emit = defineEmits(['like'])

const isLikeComputed = computed(() =>  {
  let isTrue = false

  for (let i = 0; i < post.value.likes.length; i++) {
    const like = post.value.likes[i];
    if (like.user_id === user.id && like.post_id === post.value.id) {
      isTrue = true
    }
  }
  return isTrue
})

const sendLike = () => {
  if(isLikeComputed){
  router.post('/likes', {
    post_id: post.value.id,
    //text: form.comment
  }
,
  {
    preserveScroll: true,
  }
  )
  } else{
    alert("You have liked the post")
  }

}


    const deleteLike = (id) => {
  router.post('/likes/' + id,{
    preserveScroll:true
  })
}
  




const createComment = () => {
  router.post('/comment', {
    post_id: post.value.id,
    text: form.comment
  },
  {
    preserveScroll: true,
  }
  )
}

const deleteComment = (id) => {
  router.post('/comment/' + id,{
    preserveScroll:true
  })
}

const deletePost = (id) => {
  router.post('/post/' + id,{
    preserveScroll:true
  })
}

const isUser =() => {
  router.get('/user/' + user.value.id)
}
</script>

<template>
   <div id="Post" class="w-full bg-white rounded-lg my-4 shadow-md">
      <div class="flex items-center py-3 px-3">
        <button @click="isUser" class="mr-2">
          <img class="rounded-full ml-1 min-w-[42px] max-h-[42px]" :src="user.image">
        </button>
        <div class="flex items-center justify-between p-2 rounded-full w-full">
          <div>
            <Link :href="route('user.show', { id:post.user.id})">
            <div class="font-extrabold text-[15px]">{{ user.name }}</div>
            </Link>
            <div class="flex items-center text-xs text-gray-600">
             {{ post.created_at }} <AccountMultiple class="ml-1" :size="15" fillColor="#64676B" />
            </div>
          </div>
          <div class="flex items-center">
            <button 
            v-if="$page.props.auth.user.id === post.user.id"
              @click="deletePost(post.id)"
            class="rounded-full p-1.5 cursor-pointer hover:bg-[#F2F2F2]">
              <Delete fillColor="#64676B" />
            </button>

          </div>
        </div>
      </div>
      <div class="ml-1 px-5 pb-2 text-[17px] font-semibold">
        {{post.text}}
      </div>
      <img @click="isImageDisplay = post.image" class="mx-auto cursor-pointer ml-1 mr-1" :src="post.image" >
      <div id="Likes" class="px-5">
        <div class="flex items-center justify-between py-3 border-b">
          <button :post="post" type="button" 
          @click="sendLike" 
          
          class="flex items-center text-md pl-2 pr-3.5 rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold">
          <ThumbUp  fillColor="#FFFF00" :size="16"/> Likes {{ post.likes.length }}  </button>
          
          
          <div class="text-sm text-gray-600 font-semibold"> {{ comments.length }} comments</div>

        </div>

      </div>
      <!-- Comments Section -->
      <div id="Comments" class="px-3">
        <div id="CreateComment" class="flex items-center justify-between py-2">
          <div class="flex items-center w-full">
            <Link :href="route('user.show', { id:$page.props.auth.user.id})" class="mr-2">
              <img class="rounded-full ml-1 min-w-[36px] max-h-[36px]" :src="$page.props.auth.user.image" />            
            </Link>
            <div class="flex rounded-full w-full items-center justify-center bg-[#EFF2E5]">
              <input v-model="form.comment" class="w-full mx-1 border-none p-0 text-md bg-[#EFF2F5] placeholder-[#64676B] ring-0 focus:ring-0" placeholder="Write a public comment" type="text" />
            </div>
            <button type="button" @click="createComment" class="flex items-center text-md pl-2 pr-3.5 rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold">
                <Check fillColor="#FFFFFF" :size="20"/> Send
              </button>
          </div>
        </div>

        <div v-if="comments" id="Comments" class="max-h-[120px] overflow-auto pb-2 px-4">
          <div class="flex items-center justify-between pb-2" v-for="comment in comments" :key="comment">

          <div class="flex items-center w-full mb-1">
            <Link :href="route('posts.index')" class="mr-2">
              <img class="rounded-full min-w-[36px] max-h-[36px] ml-1" :src="comment.user.image" >
              <!--span>{{ comment.user.name }}</span-->
            </Link>
            <div class="flex items-center w-full">
              <div class="flex items-center bg-[#EFF2F5] text-xs p-2 rounded-lg w-full">
               {{ comment.text }}

              </div>
              <button 
              v-if="$page.props.auth.user.id === comment.user.id"
              @click="deleteComment(comment.id)"
              class="rounded-full p-1.5 ml-2 cursor-pointer hover:bg-[#F2F2F2]">
                <Delete fillColor="#64676B" />
              </button>
            </div>

          </div>

          </div>

        </div>

      </div>
   </div>
</template>
