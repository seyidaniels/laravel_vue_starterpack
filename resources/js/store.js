import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
  callingAPI: false,
  searching: '',
  serverURI: 'https://creditrapide.herokuapp.com/api/',
  user: null,
  token: null,
  ignoreAuthToken: false,
  userInfo: {
    messages: [{1: 'test', 2: 'test'}],
    notifications: [],
    tasks: []
  }
}

const getters = {
  getToken (state) {
    return state.token
  },
  isAuthenticated (state) {
    return localStorage.getItem('token') !== null
  },
  getUser (state) {
    return state.user.firstname + ' ' + state.user.lastname
  }
}

const mutations = {
  TOGGLE_LOADING (state) {
    state.callingAPI = !state.callingAPI
  },
  TOGGLE_SEARCHING (state) {
    state.searching = (state.searching === '') ? 'loading' : ''
  },
  SET_USER (state, user) {
    state.user = user
  },
  SET_TOKEN (state, token) {
    state.isAuthenticated = true
    state.token = token
  },

  SET_EMULATE_JSON (state, emulateJson) {
    Vue.http.options.emulateJSON = emulateJson
  },
  SET_IGNORE_AUTH_TOKEN (state, ignoreAuthToken) {
    state.ignoreAuthToken = ignoreAuthToken
  }
}

const actions = {
  SET_TOKEN (context, token) {
    context.commit('SET_TOKEN', token)
  },
  SET_USER (context, user) {
    context.commit('SET_USER', user)
  }
}

export default new Vuex.Store({
  getters,
  state,
  mutations,
  actions
})
