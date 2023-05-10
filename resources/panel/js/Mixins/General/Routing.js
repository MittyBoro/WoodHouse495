export default {
  data() {
    return {
      routePrefix: this.getPrefix(),
    }
  },

  methods: {
    currentRoute(method = null, data = null) {
      return this.$route(this.currentRouteStr(method), data)
    },
    currentRouteStr(method = null) {
      return method ? this.routePrefix + method : this.$route().current()
    },

    getPrefix() {
      let prefix = this.$route().current().split('.').slice(0, 2).join('.') + '.'
      return prefix
    },
    panelRoute(...args) {
      args[0] = 'panel.' + args[0]
      return this.$route(...args)
    },
    frontUrl(url = '') {
      return this.$page.props.config.url + '/' + url
    },
  },
}
