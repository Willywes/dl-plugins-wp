/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./views/react/App.js":
/*!****************************!*\
  !*** ./views/react/App.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_Dashboard__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/Dashboard */ "./views/react/components/Dashboard.jsx");
/* harmony import */ var _components_Menu__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/Menu */ "./views/react/components/Menu.tsx");
/* harmony import */ var _components_ThemeEdit__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/ThemeEdit */ "./views/react/components/ThemeEdit.jsx");





const App = () => {
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    style: {
      paddingRight: '1rem'
    }
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", {
    className: "app-title"
  }, "Theme Generator"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, "Con este plugin podr\xE1s crear un tema de WordPress desde cero, con las caracter\xEDsticas que desees."), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("hr", null), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "container-fluid"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-12"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_components_Menu__WEBPACK_IMPORTED_MODULE_3__["default"], null)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-12"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_components_ThemeEdit__WEBPACK_IMPORTED_MODULE_4__["default"], null)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-12"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_components_Dashboard__WEBPACK_IMPORTED_MODULE_2__["default"], null)))));
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (App);

/***/ }),

/***/ "./views/react/components/Dashboard.jsx":
/*!**********************************************!*\
  !*** ./views/react/components/Dashboard.jsx ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);


const Dashboard = () => {
  const [count, setCount] = react__WEBPACK_IMPORTED_MODULE_1___default().useState(0);
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card-body"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h5", {
    className: "card-title"
  }, "Card title"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", {
    className: "card-text"
  }, "Some quick example text to build on the card title and make up the bulk of the card's content."), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("a", {
    href: "#",
    className: "btn btn-primary"
  }, "Go somewhere")));
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Dashboard);

/***/ }),

/***/ "./views/react/components/Menu.tsx":
/*!*****************************************!*\
  !*** ./views/react/components/Menu.tsx ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

const Menu = () => {
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card-body"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "d-flex align-items-center gap-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, "New Theme"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fa fa-plus"
  }), "Add Menu"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fa fa-plus"
  }), "Add Menu"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fa fa-plus"
  }), "Add Menu"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fa fa-plus"
  }), "Add Menu"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-sm btn-primary"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fa fa-plus"
  }), "Add Menu"))));
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Menu);

/***/ }),

/***/ "./views/react/components/ThemeEdit.jsx":
/*!**********************************************!*\
  !*** ./views/react/components/ThemeEdit.jsx ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _constanst__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../constanst */ "./views/react/constanst.ts");
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../utils */ "./views/react/utils.ts");




const ThemeEdit = () => {
  const [theme, setTheme] = react__WEBPACK_IMPORTED_MODULE_1___default().useState(_constanst__WEBPACK_IMPORTED_MODULE_2__.initialTheme);

  // export const initialTheme = {
  //     name: 'My Theme',
  //     slug: 'my-theme',
  //     description: 'My Theme Description',
  //     Uri: 'https://devlasb.cl',
  //     author: 'My Name',
  //     authorUri: 'https://devlasb.cl',
  //     tags: ['blog', 'portfolio'],
  //     version: '1.0.0',
  //     customPostTypes: [],
  // }

  const handleTags = e => {
    let tags = e.target.value.split(',');
    tags = tags.map(tag => tag.trim());
    setTheme({
      ...theme,
      tags: tags
    });
  };
  const handleTaxonomies = e => {
    let taxonomies = e.target.value.split(',');
    taxonomies = taxonomies.map(taxonomy => taxonomy.trim());
    setTheme({
      ...theme,
      taxonomies: taxonomies
    });
  };
  const arrayToString = array => {
    let string = '';
    array.forEach((item, index) => {
      string += item;
      if (index < array.length - 1) {
        string += ', ';
      }
    });
    return string;
  };
  const storeTheme = () => {
    const formData = new FormData();
    formData.append('name', theme.name);
    formData.append('slug', theme.slug);
    formData.append('description', theme.description);
    formData.append('uri', theme.uri);
    formData.append('author', theme.author);
    formData.append('authorUri', theme.authorUri);
    theme.tags.forEach(tag => formData.append('tags[]', tag));
    theme.customPostTypes.forEach((customPostType, index) => {
      formData.append(`customPostTypes[${index}][singularName]`, customPostType.singularName);
      formData.append(`customPostTypes[${index}][pluralName]`, customPostType.pluralName);
    });
    fetch('/woocommerce/wp-admin/admin-ajax.php?action=tg_create_theme', {
      method: 'POST',
      body: formData
    }).then(response => response.json()).then(data => console.log(data)).catch(error => console.error('Error fetching data:', error));
  };
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "card-body"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h5", {
    className: "card-title"
  }, "Theme Settings"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", {
    className: "card-text"
  }, "Edit your theme settings here."), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "row"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "name"
  }, "Theme Name"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "name",
    placeholder: "Theme Name",
    value: theme.name,
    onChange: e => setTheme({
      ...theme,
      name: e.target.value
    }),
    onKeyUp: e => setTheme({
      ...theme,
      slug: (0,_utils__WEBPACK_IMPORTED_MODULE_3__.slugify)(theme.name)
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "slug"
  }, "Theme Slug"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "slug",
    placeholder: "Theme Slug",
    value: theme.slug,
    onChange: e => setTheme({
      ...theme,
      slug: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "description"
  }, "Theme Description"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "description",
    placeholder: "Theme Description",
    value: theme.description,
    onChange: e => setTheme({
      ...theme,
      description: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "uri"
  }, "Theme URI"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "uri",
    placeholder: "Theme URI",
    value: theme.uri,
    onChange: e => setTheme({
      ...theme,
      uri: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "author"
  }, "Author"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "author",
    placeholder: "Author",
    value: theme.author,
    onChange: e => setTheme({
      ...theme,
      author: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "authorUri"
  }, "Author URI"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "authorUri",
    placeholder: "Author URI",
    value: theme.authorUri,
    onChange: e => setTheme({
      ...theme,
      authorUri: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "tags"
  }, "Tags"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "tags",
    placeholder: "Tags",
    value: arrayToString(theme.tags),
    onChange: handleTags
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "version"
  }, "Version"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    className: "form-control",
    id: "version",
    placeholder: "Version",
    value: theme.version,
    onChange: e => setTheme({
      ...theme,
      version: e.target.value
    })
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: "col-md-3 mb-3"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("button", {
    className: "btn btn-primary",
    onClick: storeTheme
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("i", {
    className: "fas fa-save"
  }), " Save")))));
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ThemeEdit);

/***/ }),

/***/ "./views/react/constanst.ts":
/*!**********************************!*\
  !*** ./views/react/constanst.ts ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initialTheme: () => (/* binding */ initialTheme)
/* harmony export */ });
const initialTheme = {
  name: 'My Theme',
  slug: 'my-theme',
  description: 'My Theme Description',
  uri: 'https://devlabs.cl',
  author: 'My Name',
  authorUri: 'https://devlabs.cl',
  tags: ['blog', 'noticias'],
  version: '1.0.0',
  menus: [{
    name: 'Menu Principal',
    slug: 'primary-menu'
  }, {
    name: 'Menu Secundario',
    slug: 'secondary-menu'
  }, {
    name: 'Menu Footer',
    slug: 'footer-menu'
  }],
  customPostTypes: [{
    singularName: 'Servicio',
    pluralName: 'Servicios'
  }, {
    singularName: 'Producto',
    pluralName: 'Productos'
  }]
};

/***/ }),

/***/ "./views/react/utils.ts":
/*!******************************!*\
  !*** ./views/react/utils.ts ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   slugify: () => (/* binding */ slugify)
/* harmony export */ });
const slugify = text => {
  return text.toString().toLowerCase().replace(/\s+/g, '-') // Replace spaces with -
  .replace(/&/g, '-y-') // Replace & with 'and'
  .replace(/[^\w\-]+/g, '') // Remove all non-word chars
  .replace(/\-\-+/g, '-') // Replace multiple - with single -
  .replace(/^-+/, '') // Trim - from start of text
  .replace(/-+$/, ''); // Trim - from end of text
};

/***/ }),

/***/ "./views/react/scss/main.scss":
/*!************************************!*\
  !*** ./views/react/scss/main.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ ((module) => {

module.exports = window["React"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************************!*\
  !*** ./views/react/index.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _App__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./App */ "./views/react/App.js");
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scss/main.scss */ "./views/react/scss/main.scss");




/**
 * Import the stylesheet for the plugin.
 */


// Render the App component into the DOM
(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.render)((0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_App__WEBPACK_IMPORTED_MODULE_1__["default"], null), document.getElementById('sendgrid-forms'));
})();

/******/ })()
;
//# sourceMappingURL=index.js.map
