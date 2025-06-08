(self["webpackChunkblog"] = self["webpackChunkblog"] || []).push([["vote"],{

/***/ "./assets/script/vote.js":
/*!*******************************!*\
  !*** ./assets/script/vote.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/babel/babel/blob/main/packages/babel-helpers/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return r; }; var t, r = {}, e = Object.prototype, n = e.hasOwnProperty, o = "function" == typeof Symbol ? Symbol : {}, i = o.iterator || "@@iterator", a = o.asyncIterator || "@@asyncIterator", u = o.toStringTag || "@@toStringTag"; function c(t, r, e, n) { return Object.defineProperty(t, r, { value: e, enumerable: !n, configurable: !n, writable: !n }); } try { c({}, ""); } catch (t) { c = function c(t, r, e) { return t[r] = e; }; } function h(r, e, n, o) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype); return c(a, "_invoke", function (r, e, n) { var o = 1; return function (i, a) { if (3 === o) throw Error("Generator is already running"); if (4 === o) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var u = n.delegate; if (u) { var c = d(u, n); if (c) { if (c === f) continue; return c; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (1 === o) throw o = 4, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = 3; var h = s(r, e, n); if ("normal" === h.type) { if (o = n.done ? 4 : 2, h.arg === f) continue; return { value: h.arg, done: n.done }; } "throw" === h.type && (o = 4, n.method = "throw", n.arg = h.arg); } }; }(r, n, new Context(o || [])), !0), a; } function s(t, r, e) { try { return { type: "normal", arg: t.call(r, e) }; } catch (t) { return { type: "throw", arg: t }; } } r.wrap = h; var f = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var l = {}; c(l, i, function () { return this; }); var p = Object.getPrototypeOf, y = p && p(p(x([]))); y && y !== e && n.call(y, i) && (l = y); var v = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(l); function g(t) { ["next", "throw", "return"].forEach(function (r) { c(t, r, function (t) { return this._invoke(r, t); }); }); } function AsyncIterator(t, r) { function e(o, i, a, u) { var c = s(t[o], t, i); if ("throw" !== c.type) { var h = c.arg, f = h.value; return f && "object" == _typeof(f) && n.call(f, "__await") ? r.resolve(f.__await).then(function (t) { e("next", t, a, u); }, function (t) { e("throw", t, a, u); }) : r.resolve(f).then(function (t) { h.value = t, a(h); }, function (t) { return e("throw", t, a, u); }); } u(c.arg); } var o; c(this, "_invoke", function (t, n) { function i() { return new r(function (r, o) { e(t, n, r, o); }); } return o = o ? o.then(i, i) : i(); }, !0); } function d(r, e) { var n = e.method, o = r.i[n]; if (o === t) return e.delegate = null, "throw" === n && r.i["return"] && (e.method = "return", e.arg = t, d(r, e), "throw" === e.method) || "return" !== n && (e.method = "throw", e.arg = new TypeError("The iterator does not provide a '" + n + "' method")), f; var i = s(o, r.i, e.arg); if ("throw" === i.type) return e.method = "throw", e.arg = i.arg, e.delegate = null, f; var a = i.arg; return a ? a.done ? (e[r.r] = a.value, e.next = r.n, "return" !== e.method && (e.method = "next", e.arg = t), e.delegate = null, f) : a : (e.method = "throw", e.arg = new TypeError("iterator result is not an object"), e.delegate = null, f); } function w(t) { this.tryEntries.push(t); } function m(r) { var e = r[4] || {}; e.type = "normal", e.arg = t, r[4] = e; } function Context(t) { this.tryEntries = [[-1]], t.forEach(w, this), this.reset(!0); } function x(r) { if (null != r) { var e = r[i]; if (e) return e.call(r); if ("function" == typeof r.next) return r; if (!isNaN(r.length)) { var o = -1, a = function e() { for (; ++o < r.length;) if (n.call(r, o)) return e.value = r[o], e.done = !1, e; return e.value = t, e.done = !0, e; }; return a.next = a; } } throw new TypeError(_typeof(r) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, c(v, "constructor", GeneratorFunctionPrototype), c(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = c(GeneratorFunctionPrototype, u, "GeneratorFunction"), r.isGeneratorFunction = function (t) { var r = "function" == typeof t && t.constructor; return !!r && (r === GeneratorFunction || "GeneratorFunction" === (r.displayName || r.name)); }, r.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, c(t, u, "GeneratorFunction")), t.prototype = Object.create(v), t; }, r.awrap = function (t) { return { __await: t }; }, g(AsyncIterator.prototype), c(AsyncIterator.prototype, a, function () { return this; }), r.AsyncIterator = AsyncIterator, r.async = function (t, e, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(h(t, e, n, o), i); return r.isGeneratorFunction(e) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, g(v), c(v, u, "Generator"), c(v, i, function () { return this; }), c(v, "toString", function () { return "[object Generator]"; }), r.keys = function (t) { var r = Object(t), e = []; for (var n in r) e.unshift(n); return function t() { for (; e.length;) if ((n = e.pop()) in r) return t.value = n, t.done = !1, t; return t.done = !0, t; }; }, r.values = x, Context.prototype = { constructor: Context, reset: function reset(r) { if (this.prev = this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(m), !r) for (var e in this) "t" === e.charAt(0) && n.call(this, e) && !isNaN(+e.slice(1)) && (this[e] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0][4]; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(r) { if (this.done) throw r; var e = this; function n(t) { a.type = "throw", a.arg = r, e.next = t; } for (var o = e.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i[4], u = this.prev, c = i[1], h = i[2]; if (-1 === i[0]) return n("end"), !1; if (!c && !h) throw Error("try statement without catch or finally"); if (null != i[0] && i[0] <= u) { if (u < c) return this.method = "next", this.arg = t, n(c), !0; if (u < h) return n(h), !1; } } }, abrupt: function abrupt(t, r) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var n = this.tryEntries[e]; if (n[0] > -1 && n[0] <= this.prev && this.prev < n[2]) { var o = n; break; } } o && ("break" === t || "continue" === t) && o[0] <= r && r <= o[2] && (o = null); var i = o ? o[4] : {}; return i.type = t, i.arg = r, o ? (this.method = "next", this.next = o[2], f) : this.complete(i); }, complete: function complete(t, r) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && r && (this.next = r), f; }, finish: function finish(t) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var e = this.tryEntries[r]; if (e[2] === t) return this.complete(e[4], e[3]), m(e), f; } }, "catch": function _catch(t) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var e = this.tryEntries[r]; if (e[0] === t) { var n = e[4]; if ("throw" === n.type) { var o = n.arg; m(e); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(r, e, n) { return this.delegate = { i: x(r), r: e, n: n }, "next" === this.method && (this.arg = t), f; } }, r; }
function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
__webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.push.js */ "./node_modules/core-js/modules/es.array.push.js");
__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
__webpack_require__(/*! core-js/modules/es.array.unshift.js */ "./node_modules/core-js/modules/es.array.unshift.js");
__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
__webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
__webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
__webpack_require__(/*! core-js/modules/es.object.proto.js */ "./node_modules/core-js/modules/es.object.proto.js");
__webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
__webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
document.addEventListener('DOMContentLoaded', function () {
  var voteButtons = document.querySelectorAll('.vote-btn');
  voteButtons.forEach(function (button) {
    button.addEventListener('click', /*#__PURE__*/function () {
      var _ref = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee(e) {
        var modal, articleId, voteType, response, data, voteContainer, likeBtn, dislikeBtn, _modal;
        return _regeneratorRuntime().wrap(function _callee$(_context) {
          while (1) switch (_context.prev = _context.next) {
            case 0:
              e.preventDefault();
              if (!button.disabled) {
                _context.next = 5;
                break;
              }
              modal = new bootstrap.Modal(document.getElementById('loginModal'));
              modal.show();
              return _context.abrupt("return");
            case 5:
              articleId = button.dataset.articleId;
              voteType = button.dataset.voteType;
              _context.prev = 7;
              _context.next = 10;
              return fetch("/article/".concat(articleId, "/vote/").concat(voteType), {
                method: 'POST',
                headers: {
                  'X-Requested-With': 'XMLHttpRequest',
                  'Content-Type': 'application/json',
                  'Accept': 'application/json'
                },
                credentials: 'include'
              });
            case 10:
              response = _context.sent;
              _context.next = 13;
              return response.json();
            case 13:
              data = _context.sent;
              if (!(response.status === 401)) {
                _context.next = 16;
                break;
              }
              throw new Error('Unauthorized');
            case 16:
              if (response.ok) {
                _context.next = 18;
                break;
              }
              throw new Error(data.message || 'Error');
            case 18:
              voteContainer = button.closest('.vote-container');
              likeBtn = voteContainer.querySelector('.vote-btn.like');
              dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');
              likeBtn.querySelector('.like-count').textContent = data.likes;
              dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;
              likeBtn.classList.toggle('active', data.userVote === 1);
              dislikeBtn.classList.toggle('active', data.userVote === -1);
              _context.next = 31;
              break;
            case 27:
              _context.prev = 27;
              _context.t0 = _context["catch"](7);
              console.error('Vote error:', _context.t0);
              if (_context.t0.message === 'Unauthorized') {
                _modal = new bootstrap.Modal(document.getElementById('loginModal'));
                _modal.show();
              } else {
                alert('Une erreur est survenue : ' + _context.t0.message);
              }
            case 31:
            case "end":
              return _context.stop();
          }
        }, _callee, null, [[7, 27]]);
      }));
      return function (_x) {
        return _ref.apply(this, arguments);
      };
    }());
  });
});

/***/ }),

/***/ "./node_modules/core-js/internals/array-set-length.js":
/*!************************************************************!*\
  !*** ./node_modules/core-js/internals/array-set-length.js ***!
  \************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");

var $TypeError = TypeError;
// eslint-disable-next-line es/no-object-getownpropertydescriptor -- safe
var getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

// Safari < 13 does not throw an error in this case
var SILENT_ON_NON_WRITABLE_LENGTH_SET = DESCRIPTORS && !function () {
  // makes no sense without proper strict mode support
  if (this !== undefined) return true;
  try {
    // eslint-disable-next-line es/no-object-defineproperty -- safe
    Object.defineProperty([], 'length', { writable: false }).length = 1;
  } catch (error) {
    return error instanceof TypeError;
  }
}();

module.exports = SILENT_ON_NON_WRITABLE_LENGTH_SET ? function (O, length) {
  if (isArray(O) && !getOwnPropertyDescriptor(O, 'length').writable) {
    throw new $TypeError('Cannot set read only .length');
  } return O.length = length;
} : function (O, length) {
  return O.length = length;
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.push.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.push.js ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var setArrayLength = __webpack_require__(/*! ../internals/array-set-length */ "./node_modules/core-js/internals/array-set-length.js");
var doesNotExceedSafeInteger = __webpack_require__(/*! ../internals/does-not-exceed-safe-integer */ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");

var INCORRECT_TO_LENGTH = fails(function () {
  return [].push.call({ length: 0x100000000 }, 1) !== 4294967297;
});

// V8 <= 121 and Safari <= 15.4; FF < 23 throws InternalError
// https://bugs.chromium.org/p/v8/issues/detail?id=12681
var properErrorOnNonWritableLength = function () {
  try {
    // eslint-disable-next-line es/no-object-defineproperty -- safe
    Object.defineProperty([], 'length', { writable: false }).push();
  } catch (error) {
    return error instanceof TypeError;
  }
};

var FORCED = INCORRECT_TO_LENGTH || !properErrorOnNonWritableLength();

// `Array.prototype.push` method
// https://tc39.es/ecma262/#sec-array.prototype.push
$({ target: 'Array', proto: true, arity: 1, forced: FORCED }, {
  // eslint-disable-next-line no-unused-vars -- required for `.length`
  push: function push(item) {
    var O = toObject(this);
    var len = lengthOfArrayLike(O);
    var argCount = arguments.length;
    doesNotExceedSafeInteger(len + argCount);
    for (var i = 0; i < argCount; i++) {
      O[len] = arguments[i];
      len++;
    }
    setArrayLength(O, len);
    return len;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.slice.js":
/*!********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.slice.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");
var isConstructor = __webpack_require__(/*! ../internals/is-constructor */ "./node_modules/core-js/internals/is-constructor.js");
var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");
var toAbsoluteIndex = __webpack_require__(/*! ../internals/to-absolute-index */ "./node_modules/core-js/internals/to-absolute-index.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var toIndexedObject = __webpack_require__(/*! ../internals/to-indexed-object */ "./node_modules/core-js/internals/to-indexed-object.js");
var createProperty = __webpack_require__(/*! ../internals/create-property */ "./node_modules/core-js/internals/create-property.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var arrayMethodHasSpeciesSupport = __webpack_require__(/*! ../internals/array-method-has-species-support */ "./node_modules/core-js/internals/array-method-has-species-support.js");
var nativeSlice = __webpack_require__(/*! ../internals/array-slice */ "./node_modules/core-js/internals/array-slice.js");

var HAS_SPECIES_SUPPORT = arrayMethodHasSpeciesSupport('slice');

var SPECIES = wellKnownSymbol('species');
var $Array = Array;
var max = Math.max;

// `Array.prototype.slice` method
// https://tc39.es/ecma262/#sec-array.prototype.slice
// fallback for not array-like ES3 strings and DOM objects
$({ target: 'Array', proto: true, forced: !HAS_SPECIES_SUPPORT }, {
  slice: function slice(start, end) {
    var O = toIndexedObject(this);
    var length = lengthOfArrayLike(O);
    var k = toAbsoluteIndex(start, length);
    var fin = toAbsoluteIndex(end === undefined ? length : end, length);
    // inline `ArraySpeciesCreate` for usage native `Array#slice` where it's possible
    var Constructor, result, n;
    if (isArray(O)) {
      Constructor = O.constructor;
      // cross-realm fallback
      if (isConstructor(Constructor) && (Constructor === $Array || isArray(Constructor.prototype))) {
        Constructor = undefined;
      } else if (isObject(Constructor)) {
        Constructor = Constructor[SPECIES];
        if (Constructor === null) Constructor = undefined;
      }
      if (Constructor === $Array || Constructor === undefined) {
        return nativeSlice(O, k, fin);
      }
    }
    result = new (Constructor === undefined ? $Array : Constructor)(max(fin - k, 0));
    for (n = 0; k < fin; k++, n++) if (k in O) createProperty(result, n, O[k]);
    result.length = n;
    return result;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.unshift.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.unshift.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var setArrayLength = __webpack_require__(/*! ../internals/array-set-length */ "./node_modules/core-js/internals/array-set-length.js");
var deletePropertyOrThrow = __webpack_require__(/*! ../internals/delete-property-or-throw */ "./node_modules/core-js/internals/delete-property-or-throw.js");
var doesNotExceedSafeInteger = __webpack_require__(/*! ../internals/does-not-exceed-safe-integer */ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js");

// IE8-
var INCORRECT_RESULT = [].unshift(0) !== 1;

// V8 ~ Chrome < 71 and Safari <= 15.4, FF < 23 throws InternalError
var properErrorOnNonWritableLength = function () {
  try {
    // eslint-disable-next-line es/no-object-defineproperty -- safe
    Object.defineProperty([], 'length', { writable: false }).unshift();
  } catch (error) {
    return error instanceof TypeError;
  }
};

var FORCED = INCORRECT_RESULT || !properErrorOnNonWritableLength();

// `Array.prototype.unshift` method
// https://tc39.es/ecma262/#sec-array.prototype.unshift
$({ target: 'Array', proto: true, arity: 1, forced: FORCED }, {
  // eslint-disable-next-line no-unused-vars -- required for `.length`
  unshift: function unshift(item) {
    var O = toObject(this);
    var len = lengthOfArrayLike(O);
    var argCount = arguments.length;
    if (argCount) {
      doesNotExceedSafeInteger(len + argCount);
      var k = len;
      while (k--) {
        var to = k + argCount;
        if (k in O) O[to] = O[k];
        else deletePropertyOrThrow(O, to);
      }
      for (var j = 0; j < argCount; j++) {
        O[j] = arguments[j];
      }
    } return setArrayLength(O, len + argCount);
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.function.name.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/modules/es.function.name.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var FUNCTION_NAME_EXISTS = (__webpack_require__(/*! ../internals/function-name */ "./node_modules/core-js/internals/function-name.js").EXISTS);
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var defineBuiltInAccessor = __webpack_require__(/*! ../internals/define-built-in-accessor */ "./node_modules/core-js/internals/define-built-in-accessor.js");

var FunctionPrototype = Function.prototype;
var functionToString = uncurryThis(FunctionPrototype.toString);
var nameRE = /function\b(?:\s|\/\*[\S\s]*?\*\/|\/\/[^\n\r]*[\n\r]+)*([^\s(/]*)/;
var regExpExec = uncurryThis(nameRE.exec);
var NAME = 'name';

// Function instances `.name` property
// https://tc39.es/ecma262/#sec-function-instances-name
if (DESCRIPTORS && !FUNCTION_NAME_EXISTS) {
  defineBuiltInAccessor(FunctionPrototype, NAME, {
    configurable: true,
    get: function () {
      try {
        return regExpExec(nameRE, functionToString(this))[1];
      } catch (error) {
        return '';
      }
    }
  });
}


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_delete-property-or-throw_js-node_modules_core-js_modul-d4434b"], () => (__webpack_exec__("./assets/script/vote.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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bUhBQTJDOztBQUVsRjtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsMENBQTBDLGlCQUFpQjtBQUMzRCxJQUFJO0FBQ0o7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQSxJQUFJLHdEQUF3RDtBQUM1RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQixjQUFjO0FBQ3BDO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQSxDQUFDOzs7Ozs7Ozs7Ozs7QUM1Q1k7QUFDYixrQkFBa0IsbUJBQU8sQ0FBQyxpRkFBMEI7QUFDcEQsMkJBQTJCLG1IQUE0QztBQUN2RSxrQkFBa0IsbUJBQU8sQ0FBQyxxR0FBb0M7QUFDOUQsNEJBQTRCLG1CQUFPLENBQUMsMkdBQXVDOztBQUUzRTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vYmxvZy8uL2Fzc2V0cy9zY3JpcHQvdm90ZS5qcyIsIndlYnBhY2s6Ly9ibG9nLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2FycmF5LXNldC1sZW5ndGguanMiLCJ3ZWJwYWNrOi8vYmxvZy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvZXMuYXJyYXkucHVzaC5qcyIsIndlYnBhY2s6Ly9ibG9nLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5hcnJheS5zbGljZS5qcyIsIndlYnBhY2s6Ly9ibG9nLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5hcnJheS51bnNoaWZ0LmpzIiwid2VicGFjazovL2Jsb2cvLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmZ1bmN0aW9uLm5hbWUuanMiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uICgpIHtcbiAgICBjb25zdCB2b3RlQnV0dG9ucyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy52b3RlLWJ0bicpO1xuXG4gICAgdm90ZUJ1dHRvbnMuZm9yRWFjaChidXR0b24gPT4ge1xuICAgICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBhc3luYyBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgICAgICBpZiAoYnV0dG9uLmRpc2FibGVkKSB7XG4gICAgICAgICAgICAgICAgY29uc3QgbW9kYWwgPSBuZXcgYm9vdHN0cmFwLk1vZGFsKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dpbk1vZGFsJykpO1xuICAgICAgICAgICAgICAgIG1vZGFsLnNob3coKTtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGNvbnN0IGFydGljbGVJZCA9IGJ1dHRvbi5kYXRhc2V0LmFydGljbGVJZDtcbiAgICAgICAgICAgIGNvbnN0IHZvdGVUeXBlID0gYnV0dG9uLmRhdGFzZXQudm90ZVR5cGU7XG5cbiAgICAgICAgICAgIHRyeSB7XG4gICAgICAgICAgICAgICAgY29uc3QgcmVzcG9uc2UgPSBhd2FpdCBmZXRjaChgL2FydGljbGUvJHthcnRpY2xlSWR9L3ZvdGUvJHt2b3RlVHlwZX1gLCB7XG4gICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxuICAgICAgICAgICAgICAgICAgICBoZWFkZXJzOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAnWC1SZXF1ZXN0ZWQtV2l0aCc6ICdYTUxIdHRwUmVxdWVzdCcsXG4gICAgICAgICAgICAgICAgICAgICAgICAnQ29udGVudC1UeXBlJzogJ2FwcGxpY2F0aW9uL2pzb24nLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ0FjY2VwdCc6ICdhcHBsaWNhdGlvbi9qc29uJ1xuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICBjcmVkZW50aWFsczogJ2luY2x1ZGUnXG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBjb25zdCBkYXRhID0gYXdhaXQgcmVzcG9uc2UuanNvbigpO1xuXG4gICAgICAgICAgICAgICAgaWYgKHJlc3BvbnNlLnN0YXR1cyA9PT0gNDAxKSB7XG4gICAgICAgICAgICAgICAgICAgIHRocm93IG5ldyBFcnJvcignVW5hdXRob3JpemVkJyk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgaWYgKCFyZXNwb25zZS5vaykge1xuICAgICAgICAgICAgICAgICAgICB0aHJvdyBuZXcgRXJyb3IoZGF0YS5tZXNzYWdlIHx8ICdFcnJvcicpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGNvbnN0IHZvdGVDb250YWluZXIgPSBidXR0b24uY2xvc2VzdCgnLnZvdGUtY29udGFpbmVyJyk7XG4gICAgICAgICAgICAgICAgY29uc3QgbGlrZUJ0biA9IHZvdGVDb250YWluZXIucXVlcnlTZWxlY3RvcignLnZvdGUtYnRuLmxpa2UnKTtcbiAgICAgICAgICAgICAgICBjb25zdCBkaXNsaWtlQnRuID0gdm90ZUNvbnRhaW5lci5xdWVyeVNlbGVjdG9yKCcudm90ZS1idG4uZGlzbGlrZScpO1xuXG4gICAgICAgICAgICAgICAgbGlrZUJ0bi5xdWVyeVNlbGVjdG9yKCcubGlrZS1jb3VudCcpLnRleHRDb250ZW50ID0gZGF0YS5saWtlcztcbiAgICAgICAgICAgICAgICBkaXNsaWtlQnRuLnF1ZXJ5U2VsZWN0b3IoJy5kaXNsaWtlLWNvdW50JykudGV4dENvbnRlbnQgPSBkYXRhLmRpc2xpa2VzO1xuXG4gICAgICAgICAgICAgICAgbGlrZUJ0bi5jbGFzc0xpc3QudG9nZ2xlKCdhY3RpdmUnLCBkYXRhLnVzZXJWb3RlID09PSAxKTtcbiAgICAgICAgICAgICAgICBkaXNsaWtlQnRuLmNsYXNzTGlzdC50b2dnbGUoJ2FjdGl2ZScsIGRhdGEudXNlclZvdGUgPT09IC0xKTtcbiAgICAgICAgICAgIH0gY2F0Y2ggKGVycm9yKSB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcignVm90ZSBlcnJvcjonLCBlcnJvcik7XG4gICAgICAgICAgICAgICAgaWYgKGVycm9yLm1lc3NhZ2UgPT09ICdVbmF1dGhvcml6ZWQnKSB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IG1vZGFsID0gbmV3IGJvb3RzdHJhcC5Nb2RhbChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9naW5Nb2RhbCcpKTtcbiAgICAgICAgICAgICAgICAgICAgbW9kYWwuc2hvdygpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIGFsZXJ0KCdVbmUgZXJyZXVyIGVzdCBzdXJ2ZW51ZSA6ICcgKyBlcnJvci5tZXNzYWdlKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0pO1xufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgREVTQ1JJUFRPUlMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZGVzY3JpcHRvcnMnKTtcbnZhciBpc0FycmF5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWFycmF5Jyk7XG5cbnZhciAkVHlwZUVycm9yID0gVHlwZUVycm9yO1xuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLW9iamVjdC1nZXRvd25wcm9wZXJ0eWRlc2NyaXB0b3IgLS0gc2FmZVxudmFyIGdldE93blByb3BlcnR5RGVzY3JpcHRvciA9IE9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3I7XG5cbi8vIFNhZmFyaSA8IDEzIGRvZXMgbm90IHRocm93IGFuIGVycm9yIGluIHRoaXMgY2FzZVxudmFyIFNJTEVOVF9PTl9OT05fV1JJVEFCTEVfTEVOR1RIX1NFVCA9IERFU0NSSVBUT1JTICYmICFmdW5jdGlvbiAoKSB7XG4gIC8vIG1ha2VzIG5vIHNlbnNlIHdpdGhvdXQgcHJvcGVyIHN0cmljdCBtb2RlIHN1cHBvcnRcbiAgaWYgKHRoaXMgIT09IHVuZGVmaW5lZCkgcmV0dXJuIHRydWU7XG4gIHRyeSB7XG4gICAgLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLW9iamVjdC1kZWZpbmVwcm9wZXJ0eSAtLSBzYWZlXG4gICAgT2JqZWN0LmRlZmluZVByb3BlcnR5KFtdLCAnbGVuZ3RoJywgeyB3cml0YWJsZTogZmFsc2UgfSkubGVuZ3RoID0gMTtcbiAgfSBjYXRjaCAoZXJyb3IpIHtcbiAgICByZXR1cm4gZXJyb3IgaW5zdGFuY2VvZiBUeXBlRXJyb3I7XG4gIH1cbn0oKTtcblxubW9kdWxlLmV4cG9ydHMgPSBTSUxFTlRfT05fTk9OX1dSSVRBQkxFX0xFTkdUSF9TRVQgPyBmdW5jdGlvbiAoTywgbGVuZ3RoKSB7XG4gIGlmIChpc0FycmF5KE8pICYmICFnZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3IoTywgJ2xlbmd0aCcpLndyaXRhYmxlKSB7XG4gICAgdGhyb3cgbmV3ICRUeXBlRXJyb3IoJ0Nhbm5vdCBzZXQgcmVhZCBvbmx5IC5sZW5ndGgnKTtcbiAgfSByZXR1cm4gTy5sZW5ndGggPSBsZW5ndGg7XG59IDogZnVuY3Rpb24gKE8sIGxlbmd0aCkge1xuICByZXR1cm4gTy5sZW5ndGggPSBsZW5ndGg7XG59O1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgdG9PYmplY3QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tb2JqZWN0Jyk7XG52YXIgbGVuZ3RoT2ZBcnJheUxpa2UgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvbGVuZ3RoLW9mLWFycmF5LWxpa2UnKTtcbnZhciBzZXRBcnJheUxlbmd0aCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hcnJheS1zZXQtbGVuZ3RoJyk7XG52YXIgZG9lc05vdEV4Y2VlZFNhZmVJbnRlZ2VyID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2RvZXMtbm90LWV4Y2VlZC1zYWZlLWludGVnZXInKTtcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xuXG52YXIgSU5DT1JSRUNUX1RPX0xFTkdUSCA9IGZhaWxzKGZ1bmN0aW9uICgpIHtcbiAgcmV0dXJuIFtdLnB1c2guY2FsbCh7IGxlbmd0aDogMHgxMDAwMDAwMDAgfSwgMSkgIT09IDQyOTQ5NjcyOTc7XG59KTtcblxuLy8gVjggPD0gMTIxIGFuZCBTYWZhcmkgPD0gMTUuNDsgRkYgPCAyMyB0aHJvd3MgSW50ZXJuYWxFcnJvclxuLy8gaHR0cHM6Ly9idWdzLmNocm9taXVtLm9yZy9wL3Y4L2lzc3Vlcy9kZXRhaWw/aWQ9MTI2ODFcbnZhciBwcm9wZXJFcnJvck9uTm9uV3JpdGFibGVMZW5ndGggPSBmdW5jdGlvbiAoKSB7XG4gIHRyeSB7XG4gICAgLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLW9iamVjdC1kZWZpbmVwcm9wZXJ0eSAtLSBzYWZlXG4gICAgT2JqZWN0LmRlZmluZVByb3BlcnR5KFtdLCAnbGVuZ3RoJywgeyB3cml0YWJsZTogZmFsc2UgfSkucHVzaCgpO1xuICB9IGNhdGNoIChlcnJvcikge1xuICAgIHJldHVybiBlcnJvciBpbnN0YW5jZW9mIFR5cGVFcnJvcjtcbiAgfVxufTtcblxudmFyIEZPUkNFRCA9IElOQ09SUkVDVF9UT19MRU5HVEggfHwgIXByb3BlckVycm9yT25Ob25Xcml0YWJsZUxlbmd0aCgpO1xuXG4vLyBgQXJyYXkucHJvdG90eXBlLnB1c2hgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUucHVzaFxuJCh7IHRhcmdldDogJ0FycmF5JywgcHJvdG86IHRydWUsIGFyaXR5OiAxLCBmb3JjZWQ6IEZPUkNFRCB9LCB7XG4gIC8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBuby11bnVzZWQtdmFycyAtLSByZXF1aXJlZCBmb3IgYC5sZW5ndGhgXG4gIHB1c2g6IGZ1bmN0aW9uIHB1c2goaXRlbSkge1xuICAgIHZhciBPID0gdG9PYmplY3QodGhpcyk7XG4gICAgdmFyIGxlbiA9IGxlbmd0aE9mQXJyYXlMaWtlKE8pO1xuICAgIHZhciBhcmdDb3VudCA9IGFyZ3VtZW50cy5sZW5ndGg7XG4gICAgZG9lc05vdEV4Y2VlZFNhZmVJbnRlZ2VyKGxlbiArIGFyZ0NvdW50KTtcbiAgICBmb3IgKHZhciBpID0gMDsgaSA8IGFyZ0NvdW50OyBpKyspIHtcbiAgICAgIE9bbGVuXSA9IGFyZ3VtZW50c1tpXTtcbiAgICAgIGxlbisrO1xuICAgIH1cbiAgICBzZXRBcnJheUxlbmd0aChPLCBsZW4pO1xuICAgIHJldHVybiBsZW47XG4gIH1cbn0pO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgaXNBcnJheSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1hcnJheScpO1xudmFyIGlzQ29uc3RydWN0b3IgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtY29uc3RydWN0b3InKTtcbnZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1vYmplY3QnKTtcbnZhciB0b0Fic29sdXRlSW5kZXggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tYWJzb2x1dGUtaW5kZXgnKTtcbnZhciBsZW5ndGhPZkFycmF5TGlrZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9sZW5ndGgtb2YtYXJyYXktbGlrZScpO1xudmFyIHRvSW5kZXhlZE9iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1pbmRleGVkLW9iamVjdCcpO1xudmFyIGNyZWF0ZVByb3BlcnR5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NyZWF0ZS1wcm9wZXJ0eScpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xudmFyIGFycmF5TWV0aG9kSGFzU3BlY2llc1N1cHBvcnQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktbWV0aG9kLWhhcy1zcGVjaWVzLXN1cHBvcnQnKTtcbnZhciBuYXRpdmVTbGljZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hcnJheS1zbGljZScpO1xuXG52YXIgSEFTX1NQRUNJRVNfU1VQUE9SVCA9IGFycmF5TWV0aG9kSGFzU3BlY2llc1N1cHBvcnQoJ3NsaWNlJyk7XG5cbnZhciBTUEVDSUVTID0gd2VsbEtub3duU3ltYm9sKCdzcGVjaWVzJyk7XG52YXIgJEFycmF5ID0gQXJyYXk7XG52YXIgbWF4ID0gTWF0aC5tYXg7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUuc2xpY2VgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuc2xpY2Vcbi8vIGZhbGxiYWNrIGZvciBub3QgYXJyYXktbGlrZSBFUzMgc3RyaW5ncyBhbmQgRE9NIG9iamVjdHNcbiQoeyB0YXJnZXQ6ICdBcnJheScsIHByb3RvOiB0cnVlLCBmb3JjZWQ6ICFIQVNfU1BFQ0lFU19TVVBQT1JUIH0sIHtcbiAgc2xpY2U6IGZ1bmN0aW9uIHNsaWNlKHN0YXJ0LCBlbmQpIHtcbiAgICB2YXIgTyA9IHRvSW5kZXhlZE9iamVjdCh0aGlzKTtcbiAgICB2YXIgbGVuZ3RoID0gbGVuZ3RoT2ZBcnJheUxpa2UoTyk7XG4gICAgdmFyIGsgPSB0b0Fic29sdXRlSW5kZXgoc3RhcnQsIGxlbmd0aCk7XG4gICAgdmFyIGZpbiA9IHRvQWJzb2x1dGVJbmRleChlbmQgPT09IHVuZGVmaW5lZCA/IGxlbmd0aCA6IGVuZCwgbGVuZ3RoKTtcbiAgICAvLyBpbmxpbmUgYEFycmF5U3BlY2llc0NyZWF0ZWAgZm9yIHVzYWdlIG5hdGl2ZSBgQXJyYXkjc2xpY2VgIHdoZXJlIGl0J3MgcG9zc2libGVcbiAgICB2YXIgQ29uc3RydWN0b3IsIHJlc3VsdCwgbjtcbiAgICBpZiAoaXNBcnJheShPKSkge1xuICAgICAgQ29uc3RydWN0b3IgPSBPLmNvbnN0cnVjdG9yO1xuICAgICAgLy8gY3Jvc3MtcmVhbG0gZmFsbGJhY2tcbiAgICAgIGlmIChpc0NvbnN0cnVjdG9yKENvbnN0cnVjdG9yKSAmJiAoQ29uc3RydWN0b3IgPT09ICRBcnJheSB8fCBpc0FycmF5KENvbnN0cnVjdG9yLnByb3RvdHlwZSkpKSB7XG4gICAgICAgIENvbnN0cnVjdG9yID0gdW5kZWZpbmVkO1xuICAgICAgfSBlbHNlIGlmIChpc09iamVjdChDb25zdHJ1Y3RvcikpIHtcbiAgICAgICAgQ29uc3RydWN0b3IgPSBDb25zdHJ1Y3RvcltTUEVDSUVTXTtcbiAgICAgICAgaWYgKENvbnN0cnVjdG9yID09PSBudWxsKSBDb25zdHJ1Y3RvciA9IHVuZGVmaW5lZDtcbiAgICAgIH1cbiAgICAgIGlmIChDb25zdHJ1Y3RvciA9PT0gJEFycmF5IHx8IENvbnN0cnVjdG9yID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIG5hdGl2ZVNsaWNlKE8sIGssIGZpbik7XG4gICAgICB9XG4gICAgfVxuICAgIHJlc3VsdCA9IG5ldyAoQ29uc3RydWN0b3IgPT09IHVuZGVmaW5lZCA/ICRBcnJheSA6IENvbnN0cnVjdG9yKShtYXgoZmluIC0gaywgMCkpO1xuICAgIGZvciAobiA9IDA7IGsgPCBmaW47IGsrKywgbisrKSBpZiAoayBpbiBPKSBjcmVhdGVQcm9wZXJ0eShyZXN1bHQsIG4sIE9ba10pO1xuICAgIHJlc3VsdC5sZW5ndGggPSBuO1xuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cbn0pO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgdG9PYmplY3QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tb2JqZWN0Jyk7XG52YXIgbGVuZ3RoT2ZBcnJheUxpa2UgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvbGVuZ3RoLW9mLWFycmF5LWxpa2UnKTtcbnZhciBzZXRBcnJheUxlbmd0aCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hcnJheS1zZXQtbGVuZ3RoJyk7XG52YXIgZGVsZXRlUHJvcGVydHlPclRocm93ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2RlbGV0ZS1wcm9wZXJ0eS1vci10aHJvdycpO1xudmFyIGRvZXNOb3RFeGNlZWRTYWZlSW50ZWdlciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kb2VzLW5vdC1leGNlZWQtc2FmZS1pbnRlZ2VyJyk7XG5cbi8vIElFOC1cbnZhciBJTkNPUlJFQ1RfUkVTVUxUID0gW10udW5zaGlmdCgwKSAhPT0gMTtcblxuLy8gVjggfiBDaHJvbWUgPCA3MSBhbmQgU2FmYXJpIDw9IDE1LjQsIEZGIDwgMjMgdGhyb3dzIEludGVybmFsRXJyb3JcbnZhciBwcm9wZXJFcnJvck9uTm9uV3JpdGFibGVMZW5ndGggPSBmdW5jdGlvbiAoKSB7XG4gIHRyeSB7XG4gICAgLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLW9iamVjdC1kZWZpbmVwcm9wZXJ0eSAtLSBzYWZlXG4gICAgT2JqZWN0LmRlZmluZVByb3BlcnR5KFtdLCAnbGVuZ3RoJywgeyB3cml0YWJsZTogZmFsc2UgfSkudW5zaGlmdCgpO1xuICB9IGNhdGNoIChlcnJvcikge1xuICAgIHJldHVybiBlcnJvciBpbnN0YW5jZW9mIFR5cGVFcnJvcjtcbiAgfVxufTtcblxudmFyIEZPUkNFRCA9IElOQ09SUkVDVF9SRVNVTFQgfHwgIXByb3BlckVycm9yT25Ob25Xcml0YWJsZUxlbmd0aCgpO1xuXG4vLyBgQXJyYXkucHJvdG90eXBlLnVuc2hpZnRgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUudW5zaGlmdFxuJCh7IHRhcmdldDogJ0FycmF5JywgcHJvdG86IHRydWUsIGFyaXR5OiAxLCBmb3JjZWQ6IEZPUkNFRCB9LCB7XG4gIC8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBuby11bnVzZWQtdmFycyAtLSByZXF1aXJlZCBmb3IgYC5sZW5ndGhgXG4gIHVuc2hpZnQ6IGZ1bmN0aW9uIHVuc2hpZnQoaXRlbSkge1xuICAgIHZhciBPID0gdG9PYmplY3QodGhpcyk7XG4gICAgdmFyIGxlbiA9IGxlbmd0aE9mQXJyYXlMaWtlKE8pO1xuICAgIHZhciBhcmdDb3VudCA9IGFyZ3VtZW50cy5sZW5ndGg7XG4gICAgaWYgKGFyZ0NvdW50KSB7XG4gICAgICBkb2VzTm90RXhjZWVkU2FmZUludGVnZXIobGVuICsgYXJnQ291bnQpO1xuICAgICAgdmFyIGsgPSBsZW47XG4gICAgICB3aGlsZSAoay0tKSB7XG4gICAgICAgIHZhciB0byA9IGsgKyBhcmdDb3VudDtcbiAgICAgICAgaWYgKGsgaW4gTykgT1t0b10gPSBPW2tdO1xuICAgICAgICBlbHNlIGRlbGV0ZVByb3BlcnR5T3JUaHJvdyhPLCB0byk7XG4gICAgICB9XG4gICAgICBmb3IgKHZhciBqID0gMDsgaiA8IGFyZ0NvdW50OyBqKyspIHtcbiAgICAgICAgT1tqXSA9IGFyZ3VtZW50c1tqXTtcbiAgICAgIH1cbiAgICB9IHJldHVybiBzZXRBcnJheUxlbmd0aChPLCBsZW4gKyBhcmdDb3VudCk7XG4gIH1cbn0pO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIERFU0NSSVBUT1JTID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Rlc2NyaXB0b3JzJyk7XG52YXIgRlVOQ1RJT05fTkFNRV9FWElTVFMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tbmFtZScpLkVYSVNUUztcbnZhciB1bmN1cnJ5VGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi11bmN1cnJ5LXRoaXMnKTtcbnZhciBkZWZpbmVCdWlsdEluQWNjZXNzb3IgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZGVmaW5lLWJ1aWx0LWluLWFjY2Vzc29yJyk7XG5cbnZhciBGdW5jdGlvblByb3RvdHlwZSA9IEZ1bmN0aW9uLnByb3RvdHlwZTtcbnZhciBmdW5jdGlvblRvU3RyaW5nID0gdW5jdXJyeVRoaXMoRnVuY3Rpb25Qcm90b3R5cGUudG9TdHJpbmcpO1xudmFyIG5hbWVSRSA9IC9mdW5jdGlvblxcYig/Olxcc3xcXC9cXCpbXFxTXFxzXSo/XFwqXFwvfFxcL1xcL1teXFxuXFxyXSpbXFxuXFxyXSspKihbXlxccygvXSopLztcbnZhciByZWdFeHBFeGVjID0gdW5jdXJyeVRoaXMobmFtZVJFLmV4ZWMpO1xudmFyIE5BTUUgPSAnbmFtZSc7XG5cbi8vIEZ1bmN0aW9uIGluc3RhbmNlcyBgLm5hbWVgIHByb3BlcnR5XG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWZ1bmN0aW9uLWluc3RhbmNlcy1uYW1lXG5pZiAoREVTQ1JJUFRPUlMgJiYgIUZVTkNUSU9OX05BTUVfRVhJU1RTKSB7XG4gIGRlZmluZUJ1aWx0SW5BY2Nlc3NvcihGdW5jdGlvblByb3RvdHlwZSwgTkFNRSwge1xuICAgIGNvbmZpZ3VyYWJsZTogdHJ1ZSxcbiAgICBnZXQ6IGZ1bmN0aW9uICgpIHtcbiAgICAgIHRyeSB7XG4gICAgICAgIHJldHVybiByZWdFeHBFeGVjKG5hbWVSRSwgZnVuY3Rpb25Ub1N0cmluZyh0aGlzKSlbMV07XG4gICAgICB9IGNhdGNoIChlcnJvcikge1xuICAgICAgICByZXR1cm4gJyc7XG4gICAgICB9XG4gICAgfVxuICB9KTtcbn1cbiJdLCJuYW1lcyI6WyJfcmVnZW5lcmF0b3JSdW50aW1lIiwiciIsInQiLCJlIiwiT2JqZWN0IiwicHJvdG90eXBlIiwibiIsImhhc093blByb3BlcnR5IiwibyIsIlN5bWJvbCIsImkiLCJpdGVyYXRvciIsImEiLCJhc3luY0l0ZXJhdG9yIiwidSIsInRvU3RyaW5nVGFnIiwiYyIsImRlZmluZVByb3BlcnR5IiwidmFsdWUiLCJlbnVtZXJhYmxlIiwiY29uZmlndXJhYmxlIiwid3JpdGFibGUiLCJoIiwiR2VuZXJhdG9yIiwiY3JlYXRlIiwiRXJyb3IiLCJkb25lIiwibWV0aG9kIiwiYXJnIiwiZGVsZWdhdGUiLCJkIiwiZiIsInNlbnQiLCJfc2VudCIsImRpc3BhdGNoRXhjZXB0aW9uIiwiYWJydXB0IiwicyIsInR5cGUiLCJDb250ZXh0IiwiY2FsbCIsIndyYXAiLCJHZW5lcmF0b3JGdW5jdGlvbiIsIkdlbmVyYXRvckZ1bmN0aW9uUHJvdG90eXBlIiwibCIsInAiLCJnZXRQcm90b3R5cGVPZiIsInkiLCJ4IiwidiIsImciLCJmb3JFYWNoIiwiX2ludm9rZSIsIkFzeW5jSXRlcmF0b3IiLCJfdHlwZW9mIiwicmVzb2x2ZSIsIl9fYXdhaXQiLCJ0aGVuIiwiVHlwZUVycm9yIiwibmV4dCIsInciLCJ0cnlFbnRyaWVzIiwicHVzaCIsIm0iLCJyZXNldCIsImlzTmFOIiwibGVuZ3RoIiwiZGlzcGxheU5hbWUiLCJpc0dlbmVyYXRvckZ1bmN0aW9uIiwiY29uc3RydWN0b3IiLCJuYW1lIiwibWFyayIsInNldFByb3RvdHlwZU9mIiwiX19wcm90b19fIiwiYXdyYXAiLCJhc3luYyIsIlByb21pc2UiLCJrZXlzIiwidW5zaGlmdCIsInBvcCIsInZhbHVlcyIsInByZXYiLCJjaGFyQXQiLCJzbGljZSIsInN0b3AiLCJydmFsIiwiY29tcGxldGUiLCJmaW5pc2giLCJfY2F0Y2giLCJkZWxlZ2F0ZVlpZWxkIiwiYXN5bmNHZW5lcmF0b3JTdGVwIiwiX2FzeW5jVG9HZW5lcmF0b3IiLCJhcmd1bWVudHMiLCJhcHBseSIsIl9uZXh0IiwiX3Rocm93IiwicmVxdWlyZSIsImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInZvdGVCdXR0b25zIiwicXVlcnlTZWxlY3RvckFsbCIsImJ1dHRvbiIsIl9yZWYiLCJfY2FsbGVlIiwibW9kYWwiLCJhcnRpY2xlSWQiLCJ2b3RlVHlwZSIsInJlc3BvbnNlIiwiZGF0YSIsInZvdGVDb250YWluZXIiLCJsaWtlQnRuIiwiZGlzbGlrZUJ0biIsIl9tb2RhbCIsIl9jYWxsZWUkIiwiX2NvbnRleHQiLCJwcmV2ZW50RGVmYXVsdCIsImRpc2FibGVkIiwiYm9vdHN0cmFwIiwiTW9kYWwiLCJnZXRFbGVtZW50QnlJZCIsInNob3ciLCJkYXRhc2V0IiwiZmV0Y2giLCJjb25jYXQiLCJoZWFkZXJzIiwiY3JlZGVudGlhbHMiLCJqc29uIiwic3RhdHVzIiwib2siLCJtZXNzYWdlIiwiY2xvc2VzdCIsInF1ZXJ5U2VsZWN0b3IiLCJ0ZXh0Q29udGVudCIsImxpa2VzIiwiZGlzbGlrZXMiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJ1c2VyVm90ZSIsInQwIiwiY29uc29sZSIsImVycm9yIiwiYWxlcnQiLCJfeCJdLCJzb3VyY2VSb290IjoiIn0=