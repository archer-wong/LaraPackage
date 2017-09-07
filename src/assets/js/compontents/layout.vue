<templte>
  <div>
    <div class="app-head">
      <div class="app-head-inner">
        <div class="head-nav">
            头部信息
        </div>  
      </div>
    </div>
    <div class="container">
      <keep-alive>
        <router-view></router-view>
      </keep-alive>
    </div>
    <div class="app-foot">
      <p>© 2016 fishenal MIT</p>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      username: 'fafa'
    }
  }
}
</script>
