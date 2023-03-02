"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["UserShow"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module './Dish.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '../components/GoBack'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Dish: Object(function webpackMissingModule() { var e = new Error("Cannot find module './Dish.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()),
    GoBack: Object(function webpackMissingModule() { var e = new Error("Cannot find module '../components/GoBack'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())
  },
  data: function data() {
    return {
      cart: [],
      totalPrice: '',
      page: "UserShow"
    };
  },
  props: {
    data: Array,
    slug: {
      type: String,
      required: true
    },
    arrRestaurants: Array
  },
  computed: {
    restaurant: function restaurant() {
      var _this = this;
      return this.data.find(function (restaurant) {
        return restaurant.slug == _this.$route.params.slug;
      });
    }
  },
  methods: {
    addToCart: function addToCart(dish) {
      this.cart.push(dish);
      console.log(this.cart);
    },
    removeFromCart: function removeFromCart() {
      this.cart.pop();
      console.log(this.cart);
    },
    navigateTo: function navigateTo(page) {
      this.page = page;
    },
    arrOrders: function arrOrders() {
      // SEND API
      this.$emit('arrOrders', cart);
      axios.post('http://localhost:3000/api/cart', this.cart).then(function (response) {
        console.log(response.data);
      })["catch"](function (error) {
        console.log(error);
      });
    }
  },
  //Non so se serve questo watch
  watch: {
    updateCart: function updateCart() {
      this.arrOrders();
    }
  }
  /* async sendDataToAPI() { //Non funziona perché non é JSON
      try {
          const response = await fetch('/orders', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({ data: this.cart })
          });
          const result = await response.json();
          console.log(result);
      } catch (error) {
          console.error(error);
      }
  } */
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function render() {
  var _vm = this,
    _c = _vm._self._c;
  return _c("div", [_vm.data ? _c("div", {
    staticClass: "container-fluid post-div",
    attrs: {
      data: _vm.data
    }
  }, [_c("GoBack"), _vm._v(" "), _vm.page === "UserShow" ? _c("div", [_c("button", {
    on: {
      click: function click($event) {
        _vm.navigateTo("cart"), _vm.$emit("moveCart", _vm.cart);
      }
    }
  }, [_vm._v("View Cart")]), _vm._v(" "), _c("section", {
    staticClass: "restaurant-card"
  }, [_c("img", {
    staticClass: "card-img-top",
    attrs: {
      src: "storage/" + _vm.restaurant.uploaded_img,
      alt: _vm.restaurant.name
    }
  }), _vm._v(" "), _c("h3", {
    staticClass: "card-title"
  }, [_vm._v(_vm._s(_vm.restaurant.name))]), _vm._v(" "), _c("h6", {
    staticClass: "card-title"
  }, [_vm._v("Email: " + _vm._s(_vm.restaurant.email))]), _vm._v(" "), _c("h6", {
    staticClass: "card-title"
  }, [_vm._v("Vat Number: " + _vm._s(_vm.restaurant.vat_number))]), _vm._v(" "), _c("h6", {
    staticClass: "card-title"
  }, [_vm._v("Opening Time: " + _vm._s(_vm.restaurant.opening_time))]), _vm._v(" "), _c("h6", {
    staticClass: "card-title"
  }, [_vm._v("Closing Time: " + _vm._s(_vm.restaurant.closing_time))]), _vm._v(" "), _c("h6", {
    staticClass: "card-title"
  }, [_vm._v("Opened now: " + _vm._s(_vm.restaurant.is_opened ? "Yes" : "No"))])]), _vm._v(" "), _c("hr"), _vm._v(" "), _c("section", [_c("h1", [_vm._v("DISHES of " + _vm._s(_vm.restaurant.name))]), _vm._v(" "), _c("router-view", {
    key: _vm.$route.path,
    attrs: {
      data: _vm.data
    },
    on: {
      addToCart: _vm.addToCart,
      removeFromCart: _vm.removeFromCart
    }
  }), _vm._v(" "), _vm._l(_vm.restaurant.dishes, function (dish) {
    return _c("div", {
      key: dish.slug,
      staticClass: "dish-card"
    }, [_c("router-link", {
      staticClass: "card",
      attrs: {
        to: {
          name: "Dish",
          params: {
            dishSlug: dish.slug
          }
        }
      }
    }, [_c("h3", [_vm._v(_vm._s(dish.name))]), _vm._v(" "), _c("h6", [_vm._v("Price: " + _vm._s(dish.price) + "€")]), _vm._v(" "), _c("h6", [_vm._v("Available: "), _c("span", {
      style: dish.available ? "color:green" : "color:red"
    }, [_vm._v("\n                        " + _vm._s(dish.available ? "Yes" : "No") + " ")])])])], 1);
  })], 2)]) : _c("div", [_c("button", {
    on: {
      click: function click($event) {
        return _vm.navigateTo("UserShow");
      }
    }
  }, [_vm._v("View Products")]), _vm._v(" "), _vm._l(_vm.cart, function (product, i) {
    return _c("ul", {
      key: i,
      staticClass: "card"
    }, [_c("li", [_vm._v("Dish: " + _vm._s(product.name))]), _vm._v(" "), _c("li", [_vm._v("Price: " + _vm._s(product.price / 100) + "€")]), _vm._v(" "), _c("li", [_vm._v("Available: "), _c("span", {
      style: product.available ? "color:green" : "color:red"
    }, [_vm._v(" " + _vm._s(product.available ? "Yes" : "No"))])])]);
  })], 2)], 1) : _vm._e()]);
};
var staticRenderFns = [];
render._withStripped = true;


/***/ }),

/***/ "./resources/js/pages/UserShow.vue":
/*!*****************************************!*\
  !*** ./resources/js/pages/UserShow.vue ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UserShow.vue?vue&type=template&id=5a1c73f1& */ "./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1&");
/* harmony import */ var _UserShow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UserShow.vue?vue&type=script&lang=js& */ "./resources/js/pages/UserShow.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _UserShow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__.render,
  _UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/UserShow.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/UserShow.vue?vue&type=script&lang=js&":
/*!******************************************************************!*\
  !*** ./resources/js/pages/UserShow.vue?vue&type=script&lang=js& ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserShow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./UserShow.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserShow_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1&":
/*!************************************************************************!*\
  !*** ./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserShow_vue_vue_type_template_id_5a1c73f1___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./UserShow.vue?vue&type=template&id=5a1c73f1& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/UserShow.vue?vue&type=template&id=5a1c73f1&");


/***/ })

}]);