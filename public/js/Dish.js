"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["Dish"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'Dish',
  props: {
    data: Array,
    slug: {
      type: String,
      required: true
    },
    dishSlug: {
      type: String,
      required: true
    }
  },
  data: function data() {
    return {
      counter: '0',
      minDisabled: true,
      maxDisabled: false,
      max: 10,
      //! DATO NON C'É NELL'API, Sto simulando
      min: 0
    };
  },
  computed: {
    restaurant: function restaurant() {
      var _this = this;
      return this.data.find(function (restaurant) {
        return restaurant.slug == _this.slug;
      });
    },
    dish: function dish() {
      var _this2 = this;
      return this.restaurant.dishes.find(function (dish) {
        return dish.slug == _this2.dishSlug;
      });
    }
  },
  methods: {
    /* count(number) {
        if((number === '+') ? this.counter ++ : this.counter --);
          if(this.counter >= this.max) {
            this.minDisabled = false;
            this.maxDisabled = true;
        } else if (this.counter <= this.min) {
            this.minDisabled = true;
            this.maxDisabled = false;
        } else {
            this.minDisabled = false;
            this.maxDisabled = false;
        }
    }, */
    /* addToCart(id) {
        return this.$emit('addToCart', id)
    },
    removeFromCart(id) {
        return this.$emit('removeFromCart', id)
    }, */
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function render() {
  var _vm = this,
    _c = _vm._self._c;
  return _c("div", [_c("div", {
    staticClass: "container-fluid post-div"
  }, [_c("div", {
    staticClass: "card-body d-flex flex-column"
  }, [_c("img", {
    staticClass: "card-img-top",
    attrs: {
      src: "storage/" + _vm.dish.uploaded_img,
      alt: _vm.dish.name
    }
  }), _vm._v(" "), _c("div", {
    staticClass: "card-body d-flex flex-column"
  }, [_c("h5", {
    staticClass: "card-title"
  }, [_vm._v(_vm._s(_vm.dish.name))]), _vm._v(" "), _c("span", {
    staticClass: "card-title"
  }, [_vm._v("Description: " + _vm._s(_vm.dish.description))]), _vm._v(" "), _c("span", {
    staticClass: "card-title"
  }, [_vm._v("Price: " + _vm._s(_vm.dish.price) + "€")]), _vm._v(" "), _c("span", {
    staticClass: "card-title"
  }, [_vm._v("\n                Available: "), _c("span", {
    style: _vm.dish.available ? "color:" : "color:red"
  }, [_vm._v("\n                    " + _vm._s(_vm.dish.available ? "Yes" : "No") + " ")])]), _vm._v(" "), _c("button", {
    on: {
      click: function click($event) {
        return _vm.$emit("addToCart", _vm.dish);
      }
    }
  }, [_vm._v("Add to Cart")]), _vm._v(" "), _c("button", {
    on: {
      click: function click($event) {
        return _vm.$emit("removeFromCart", _vm.dish);
      }
    }
  }, [_vm._v("Remove from Cart")])])])])]);
};
var staticRenderFns = [];
render._withStripped = true;


/***/ }),

/***/ "./resources/js/pages/Dish.vue":
/*!*************************************!*\
  !*** ./resources/js/pages/Dish.vue ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Dish.vue?vue&type=template&id=58cb48ba& */ "./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba&");
/* harmony import */ var _Dish_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Dish.vue?vue&type=script&lang=js& */ "./resources/js/pages/Dish.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Dish_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__.render,
  _Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/Dish.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/Dish.vue?vue&type=script&lang=js&":
/*!**************************************************************!*\
  !*** ./resources/js/pages/Dish.vue?vue&type=script&lang=js& ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dish_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dish.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dish_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba&":
/*!********************************************************************!*\
  !*** ./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba& ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Dish_vue_vue_type_template_id_58cb48ba___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dish.vue?vue&type=template&id=58cb48ba& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/Dish.vue?vue&type=template&id=58cb48ba&");


/***/ })

}]);