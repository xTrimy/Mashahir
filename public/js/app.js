/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _embla__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./embla */ "./resources/js/embla.js");


Date.prototype.getFromFormat = function (format) {
  var yyyy = this.getFullYear().toString();
  format = format.replace(/yyyy/g, yyyy);
  var mm = (this.getMonth() + 1).toString();
  format = format.replace(/mm/g, mm[1] ? mm : "0" + mm[0]);
  var dd = this.getDate().toString();
  format = format.replace(/dd/g, dd[1] ? dd : "0" + dd[0]);
  var hh = this.getHours().toString();
  format = format.replace(/hh/g, hh[1] ? hh : "0" + hh[0]);
  var ii = this.getMinutes().toString();
  format = format.replace(/ii/g, ii[1] ? ii : "0" + ii[0]);
  var ss = this.getSeconds().toString();
  format = format.replace(/ss/g, ss[1] ? ss : "0" + ss[0]);
  return format;
};

/***/ }),

/***/ "./resources/js/embla.js":
/*!*******************************!*\
  !*** ./resources/js/embla.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var embla_carousel__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! embla-carousel */ "./node_modules/embla-carousel/embla-carousel.esm.js");
/* harmony import */ var _prevAndNextButtons__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./prevAndNextButtons */ "./resources/js/prevAndNextButtons.js");
/* harmony import */ var _css_embla_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../css/embla.css */ "./resources/css/embla.css");




if (document.getElementById('embla')) {
  var wrap = document.querySelector(".embla");
  var viewPort = wrap.querySelector(".embla__viewport");
  var prevBtn = wrap.querySelector(".embla__button--prev");
  var nextBtn = wrap.querySelector(".embla__button--next");
  var embla = (0,embla_carousel__WEBPACK_IMPORTED_MODULE_2__.default)(viewPort, {
    loop: false,
    skipSnaps: false
  });
  var disablePrevAndNextBtns = (0,_prevAndNextButtons__WEBPACK_IMPORTED_MODULE_0__.disablePrevNextBtns)(prevBtn, nextBtn, embla);
  (0,_prevAndNextButtons__WEBPACK_IMPORTED_MODULE_0__.setupPrevNextBtns)(prevBtn, nextBtn, embla);
  embla.on("select", disablePrevAndNextBtns);
  embla.on("init", disablePrevAndNextBtns);
}

/***/ }),

/***/ "./resources/js/prevAndNextButtons.js":
/*!********************************************!*\
  !*** ./resources/js/prevAndNextButtons.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "setupPrevNextBtns": () => (/* binding */ setupPrevNextBtns),
/* harmony export */   "disablePrevNextBtns": () => (/* binding */ disablePrevNextBtns)
/* harmony export */ });
var setupPrevNextBtns = function setupPrevNextBtns(prevBtn, nextBtn, embla) {
  prevBtn.addEventListener('click', embla.scrollPrev, false);
  nextBtn.addEventListener('click', embla.scrollNext, false);
};
var disablePrevNextBtns = function disablePrevNextBtns(prevBtn, nextBtn, embla) {
  return function () {
    if (embla.canScrollPrev()) prevBtn.removeAttribute('disabled');else prevBtn.setAttribute('disabled', 'disabled');
    if (embla.canScrollNext()) nextBtn.removeAttribute('disabled');else nextBtn.setAttribute('disabled', 'disabled');
  };
};

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./resources/css/embla.css":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./resources/css/embla.css ***!
  \*******************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ".embla {\r\n    position: relative;\r\n    background-color: #f7f7f7;\r\n    padding: 20px;\r\n    max-width: 670px;\r\n    margin-left: auto;\r\n    margin-right: auto;\r\n}\r\n\r\n.embla__viewport {\r\n    overflow: hidden;\r\n    width: 100%;\r\n}\r\n\r\n.embla__viewport.is-draggable {\r\n    cursor: move;\r\n    cursor: -webkit-grab;\r\n    cursor: grab;\r\n}\r\n\r\n.embla__viewport.is-dragging {\r\n    cursor: -webkit-grabbing;\r\n    cursor: grabbing;\r\n}\r\n\r\n.embla__container {\r\n    display: flex;\r\n    -webkit-user-select: none;\r\n       -moz-user-select: none;\r\n        -ms-user-select: none;\r\n            user-select: none;\r\n    -webkit-touch-callout: none;\r\n    -khtml-user-select: none;\r\n    -webkit-tap-highlight-color: transparent;\r\n}\r\n\r\n.embla__slide {\r\n    position: relative;\r\n    min-width: 100%;\r\n    margin-right: 10px;\r\n    overflow: hidden;\r\n    height: 190px;\r\n}\r\n\r\n.embla__slide__img {\r\n    position: absolute;\r\n    display: block;\r\n    top: 50%;\r\n    left: 50%;\r\n    width: auto;\r\n    min-height: 100%;\r\n    min-width: 100%;\r\n    max-width: none;\r\n    transform: translate(-50%, -50%);\r\n}\r\n\r\n.embla__button {\r\n    outline: 0;\r\n    cursor: pointer;\r\n    background-color: transparent;\r\n    touch-action: manipulation;\r\n    position: absolute;\r\n    z-index: 1;\r\n    top: 50%;\r\n    transform: translateY(-50%);\r\n    border: 0;\r\n    width: 30px;\r\n    height: 30px;\r\n    justify-content: center;\r\n    align-items: center;\r\n    fill: #1bcacd;\r\n    padding: 0;\r\n}\r\n\r\n.embla__button:disabled {\r\n    cursor: default;\r\n    opacity: 0.3;\r\n}\r\n\r\n.embla__button__svg {\r\n    width: 100%;\r\n    height: 100%;\r\n}\r\n\r\n.embla__button--prev {\r\n    left: 27px;\r\n}\r\n\r\n.embla__button--next {\r\n    right: 27px;\r\n}\r\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {



/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
// eslint-disable-next-line func-names
module.exports = function (cssWithMappingToString) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item);

      if (item[2]) {
        return "@media ".concat(item[2], " {").concat(content, "}");
      }

      return content;
    }).join("");
  }; // import a list of modules into the list
  // eslint-disable-next-line func-names


  list.i = function (modules, mediaQuery, dedupe) {
    if (typeof modules === "string") {
      // eslint-disable-next-line no-param-reassign
      modules = [[null, modules, ""]];
    }

    var alreadyImportedModules = {};

    if (dedupe) {
      for (var i = 0; i < this.length; i++) {
        // eslint-disable-next-line prefer-destructuring
        var id = this[i][0];

        if (id != null) {
          alreadyImportedModules[id] = true;
        }
      }
    }

    for (var _i = 0; _i < modules.length; _i++) {
      var item = [].concat(modules[_i]);

      if (dedupe && alreadyImportedModules[item[0]]) {
        // eslint-disable-next-line no-continue
        continue;
      }

      if (mediaQuery) {
        if (!item[2]) {
          item[2] = mediaQuery;
        } else {
          item[2] = "".concat(mediaQuery, " and ").concat(item[2]);
        }
      }

      list.push(item);
    }
  };

  return list;
};

/***/ }),

/***/ "./node_modules/embla-carousel/embla-carousel.esm.js":
/*!***********************************************************!*\
  !*** ./node_modules/embla-carousel/embla-carousel.esm.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _extends() {
  _extends = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];

      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }

    return target;
  };

  return _extends.apply(this, arguments);
}

function Alignment(align, viewSize) {
  var predefined = {
    start: start,
    center: center,
    end: end
  };

  function start() {
    return 0;
  }

  function center(n) {
    return end(n) / 2;
  }

  function end(n) {
    return viewSize - n;
  }

  function percent() {
    return viewSize * Number(align);
  }

  function measure(n) {
    if (typeof align === 'number') return percent();
    return predefined[align](n);
  }

  var self = {
    measure: measure
  };
  return self;
}

function Animation(callback) {
  var animationFrame = 0;

  function ifAnimating(active, cb) {
    return function () {
      if (active === !!animationFrame) cb();
    };
  }

  function start() {
    animationFrame = window.requestAnimationFrame(callback);
  }

  function stop() {
    window.cancelAnimationFrame(animationFrame);
    animationFrame = 0;
  }

  var self = {
    proceed: ifAnimating(true, start),
    start: ifAnimating(false, start),
    stop: ifAnimating(true, stop)
  };
  return self;
}

function Axis(axis, contentDirection) {
  var scroll = axis === 'y' ? 'y' : 'x';
  var cross = axis === 'y' ? 'x' : 'y';
  var startEdge = getStartEdge();
  var endEdge = getEndEdge();

  function measureSize(rect) {
    var width = rect.width,
        height = rect.height;
    return scroll === 'x' ? width : height;
  }

  function getStartEdge() {
    if (scroll === 'y') return 'top';
    return contentDirection === 'rtl' ? 'right' : 'left';
  }

  function getEndEdge() {
    if (scroll === 'y') return 'bottom';
    return contentDirection === 'rtl' ? 'left' : 'right';
  }

  var self = {
    scroll: scroll,
    cross: cross,
    startEdge: startEdge,
    endEdge: endEdge,
    measureSize: measureSize
  };
  return self;
}

function Limit(min, max) {
  var length = Math.abs(min - max);

  function reachedMin(n) {
    return n < min;
  }

  function reachedMax(n) {
    return n > max;
  }

  function reachedAny(n) {
    return reachedMin(n) || reachedMax(n);
  }

  function constrain(n) {
    if (!reachedAny(n)) return n;
    return reachedMin(n) ? min : max;
  }

  function removeOffset(n) {
    if (!length) return n;
    return n - length * Math.ceil((n - max) / length);
  }

  var self = {
    constrain: constrain,
    length: length,
    max: max,
    min: min,
    reachedAny: reachedAny,
    reachedMax: reachedMax,
    reachedMin: reachedMin,
    removeOffset: removeOffset
  };
  return self;
}

function Counter(max, start, loop) {
  var _a = Limit(0, max),
      min = _a.min,
      constrain = _a.constrain;

  var loopEnd = max + 1;
  var counter = withinLimit(start);

  function withinLimit(n) {
    return !loop ? constrain(n) : Math.abs((loopEnd + n) % loopEnd);
  }

  function get() {
    return counter;
  }

  function set(n) {
    counter = withinLimit(n);
    return self;
  }

  function add(n) {
    return set(get() + n);
  }

  function clone() {
    return Counter(max, get(), loop);
  }

  var self = {
    add: add,
    clone: clone,
    get: get,
    set: set,
    min: min,
    max: max
  };
  return self;
}

function Direction(direction) {
  var sign = direction === 'rtl' ? -1 : 1;

  function applyTo(n) {
    return n * sign;
  }

  var self = {
    applyTo: applyTo
  };
  return self;
}

function EventStore() {
  var listeners = [];

  function add(node, type, handler, options) {
    if (options === void 0) {
      options = false;
    }

    node.addEventListener(type, handler, options);
    listeners.push(function () {
      return node.removeEventListener(type, handler, options);
    });
    return self;
  }

  function removeAll() {
    listeners = listeners.filter(function (remove) {
      return remove();
    });
    return self;
  }

  var self = {
    add: add,
    removeAll: removeAll
  };
  return self;
}

function Vector1D(value) {
  var vector = value;

  function get() {
    return vector;
  }

  function set(n) {
    vector = readNumber(n);
    return self;
  }

  function add(n) {
    vector += readNumber(n);
    return self;
  }

  function subtract(n) {
    vector -= readNumber(n);
    return self;
  }

  function multiply(n) {
    vector *= n;
    return self;
  }

  function divide(n) {
    vector /= n;
    return self;
  }

  function normalize() {
    if (vector !== 0) divide(vector);
    return self;
  }

  function readNumber(n) {
    return typeof n === 'number' ? n : n.get();
  }

  var self = {
    add: add,
    divide: divide,
    get: get,
    multiply: multiply,
    normalize: normalize,
    set: set,
    subtract: subtract
  };
  return self;
}

function map(value, iStart, iStop, oStart, oStop) {
  return oStart + (oStop - oStart) * ((value - iStart) / (iStop - iStart));
}
function mathSign(n) {
  return !n ? 0 : n / Math.abs(n);
}
function deltaAbs(valueB, valueA) {
  return Math.abs(valueB - valueA);
}
function factorAbs(valueB, valueA) {
  if (valueB === 0 || valueA === 0) return 0;
  if (Math.abs(valueB) <= Math.abs(valueA)) return 0;
  var diff = deltaAbs(Math.abs(valueB), Math.abs(valueA));
  return Math.abs(diff / valueB);
}
function roundToDecimals(decimalPoints) {
  var pow = Math.pow(10, decimalPoints);
  return function (n) {
    return Math.round(n * pow) / pow;
  };
}
function debounce(callback, time) {
  var timeout = 0;
  return function () {
    window.clearTimeout(timeout);
    timeout = window.setTimeout(callback, time) || 0;
  };
}
function groupArray(array, size) {
  var groups = [];

  for (var i = 0; i < array.length; i += size) {
    groups.push(array.slice(i, i + size));
  }

  return groups;
}
function arrayKeys(array) {
  return Object.keys(array).map(Number);
}
function arrayLast(array) {
  return array[lastIndex(array)];
}
function lastIndex(array) {
  return Math.max(0, array.length - 1);
}
function removeClass(node, className) {
  var cl = node.classList;
  if (className && cl.contains(className)) cl.remove(className);
}
function addClass(node, className) {
  var cl = node.classList;
  if (className && !cl.contains(className)) cl.add(className);
}

function DragHandler(axis, direction, rootNode, target, dragFree, dragTracker, location, animation, scrollTo, scrollBody, scrollTarget, index, events, loop, skipSnaps) {
  var scrollAxis = axis.scroll,
      crossAxis = axis.cross;
  var focusNodes = ['INPUT', 'SELECT', 'TEXTAREA'];
  var startScroll = Vector1D(0);
  var startCross = Vector1D(0);
  var dragStartPoint = Vector1D(0);
  var activationEvents = EventStore();
  var interactionEvents = EventStore();
  var snapForceBoost = {
    mouse: 2.5,
    touch: 3.5
  };
  var freeForceBoost = {
    mouse: 5,
    touch: 7
  };
  var baseSpeed = dragFree ? 5 : 16;
  var baseMass = 1;
  var dragThreshold = 20;
  var pointerIsDown = false;
  var preventScroll = false;
  var preventClick = false;
  var isMouse = false;

  function addActivationEvents() {
    var node = rootNode;
    activationEvents.add(node, 'touchmove', function () {
      return undefined;
    }).add(node, 'touchend', function () {
      return undefined;
    }).add(node, 'touchstart', down).add(node, 'mousedown', down).add(node, 'touchcancel', up).add(node, 'contextmenu', up).add(node, 'click', click);
  }

  function addInteractionEvents() {
    var node = !isMouse ? rootNode : document;
    interactionEvents.add(node, 'touchmove', move).add(node, 'touchend', up).add(node, 'mousemove', move).add(node, 'mouseup', up);
  }

  function removeAllEvents() {
    activationEvents.removeAll();
    interactionEvents.removeAll();
  }

  function isFocusNode(node) {
    var name = node.nodeName || '';
    return focusNodes.indexOf(name) > -1;
  }

  function forceBoost() {
    var boost = dragFree ? freeForceBoost : snapForceBoost;
    var type = isMouse ? 'mouse' : 'touch';
    return boost[type];
  }

  function allowedForce(force, targetChanged) {
    var next = index.clone().add(mathSign(force) * -1);
    var isEdge = next.get() === index.min || next.get() === index.max;
    var baseForce = scrollTarget.byDistance(force, !dragFree).distance;
    if (dragFree || Math.abs(force) < dragThreshold) return baseForce;
    if (!loop && isEdge) return baseForce * 0.6;
    if (skipSnaps && targetChanged) return baseForce * 0.5;
    return scrollTarget.byIndex(next.get(), 0).distance;
  }

  function down(evt) {
    isMouse = evt.type === 'mousedown';
    if (isMouse && evt.button !== 0) return;
    var isMoving = deltaAbs(target.get(), location.get()) >= 2;
    var clearPreventClick = isMouse || !isMoving;
    var isNotFocusNode = !isFocusNode(evt.target);
    var preventDefault = isMoving || isMouse && isNotFocusNode;
    pointerIsDown = true;
    dragTracker.pointerDown(evt);
    dragStartPoint.set(target);
    target.set(location);
    scrollBody.useBaseMass().useSpeed(80);
    addInteractionEvents();
    startScroll.set(dragTracker.readPoint(evt, scrollAxis));
    startCross.set(dragTracker.readPoint(evt, crossAxis));
    events.emit('pointerDown');
    if (clearPreventClick) preventClick = false;
    if (preventDefault) evt.preventDefault();
  }

  function move(evt) {
    if (!preventScroll && !isMouse) {
      if (!evt.cancelable) return up();
      var moveScroll = dragTracker.readPoint(evt, scrollAxis).get();
      var moveCross = dragTracker.readPoint(evt, crossAxis).get();
      var diffScroll = deltaAbs(moveScroll, startScroll.get());
      var diffCross = deltaAbs(moveCross, startCross.get());
      preventScroll = diffScroll > diffCross;
      if (!preventScroll && !preventClick) return up();
    }

    var diff = dragTracker.pointerMove(evt);
    if (!preventClick && diff) preventClick = true;
    animation.start();
    target.add(direction.applyTo(diff));
    evt.preventDefault();
  }

  function up() {
    var currentLocation = scrollTarget.byDistance(0, false);
    var targetChanged = currentLocation.index !== index.get();
    var rawForce = dragTracker.pointerUp() * forceBoost();
    var force = allowedForce(direction.applyTo(rawForce), targetChanged);
    var forceFactor = factorAbs(rawForce, force);
    var isMoving = deltaAbs(target.get(), dragStartPoint.get()) >= 0.5;
    var isVigorous = targetChanged && forceFactor > 0.75;
    var isBelowThreshold = Math.abs(rawForce) < dragThreshold;
    var speed = isVigorous ? 10 : baseSpeed;
    var mass = isVigorous ? baseMass + 2.5 * forceFactor : baseMass;
    if (isMoving && !isMouse) preventClick = true;
    preventScroll = false;
    pointerIsDown = false;
    interactionEvents.removeAll();
    scrollBody.useSpeed(isBelowThreshold ? 9 : speed).useMass(mass);
    scrollTo.distance(force, !dragFree);
    isMouse = false;
    events.emit('pointerUp');
  }

  function click(evt) {
    if (preventClick) evt.preventDefault();
  }

  function clickAllowed() {
    return !preventClick;
  }

  function pointerDown() {
    return pointerIsDown;
  }

  var self = {
    addActivationEvents: addActivationEvents,
    clickAllowed: clickAllowed,
    pointerDown: pointerDown,
    removeAllEvents: removeAllEvents
  };
  return self;
}

function DragTracker(axis, pxToPercent) {
  var scrollAxis = axis.scroll;
  var coords = {
    x: 'clientX',
    y: 'clientY'
  };
  var startDrag = Vector1D(0);
  var diffDrag = Vector1D(0);
  var lastDrag = Vector1D(0);
  var pointValue = Vector1D(0);
  var trackInterval = 10;
  var trackLength = 5;
  var trackTime = 100;
  var trackPoints = [];
  var lastMoveTime = new Date().getTime();
  var isMouse = false;

  function readPoint(evt, type) {
    isMouse = !evt.touches;
    var c = coords[type];
    var value = isMouse ? evt[c] : evt.touches[0][c];
    return pointValue.set(value);
  }

  function pointerDown(evt) {
    var point = readPoint(evt, scrollAxis);
    startDrag.set(point);
    lastDrag.set(point);
    return pxToPercent.measure(startDrag.get());
  }

  function pointerMove(evt) {
    var point = readPoint(evt, scrollAxis);
    var nowTime = new Date().getTime();
    var diffTime = nowTime - lastMoveTime;

    if (diffTime >= trackInterval) {
      if (diffTime >= trackTime) trackPoints = [];
      trackPoints.push(point.get());
      lastMoveTime = nowTime;
    }

    diffDrag.set(point).subtract(lastDrag);
    lastDrag.set(point);
    return pxToPercent.measure(diffDrag.get());
  }

  function pointerUp() {
    var nowTime = new Date().getTime();
    var diffTime = nowTime - lastMoveTime;
    var currentPoint = lastDrag.get();
    var force = trackPoints.slice(-trackLength).map(function (trackPoint) {
      return currentPoint - trackPoint;
    }).sort(function (p1, p2) {
      return Math.abs(p1) < Math.abs(p2) ? 1 : -1;
    })[0];
    lastDrag.set(diffTime > trackTime || !force ? 0 : force);
    trackPoints = [];
    return pxToPercent.measure(lastDrag.get());
  }

  var self = {
    pointerDown: pointerDown,
    pointerMove: pointerMove,
    pointerUp: pointerUp,
    readPoint: readPoint
  };
  return self;
}

function PxToPercent(viewInPx) {
  var totalPercent = 100;

  function measure(n) {
    if (viewInPx === 0) return 0;
    return n / viewInPx * totalPercent;
  }

  var self = {
    measure: measure,
    totalPercent: totalPercent
  };
  return self;
}

function ScrollBody(location, baseSpeed, baseMass) {
  var roundToTwoDecimals = roundToDecimals(2);
  var velocity = Vector1D(0);
  var acceleration = Vector1D(0);
  var attraction = Vector1D(0);
  var attractionDirection = 0;
  var speed = baseSpeed;
  var mass = baseMass;

  function update() {
    velocity.add(acceleration);
    location.add(velocity);
    acceleration.multiply(0);
  }

  function applyForce(v) {
    v.divide(mass);
    acceleration.add(v);
  }

  function seek(v) {
    attraction.set(v).subtract(location);
    var magnitude = map(attraction.get(), 0, 100, 0, speed);
    attractionDirection = mathSign(attraction.get());
    attraction.normalize().multiply(magnitude).subtract(velocity);
    applyForce(attraction);
    return self;
  }

  function settle(v) {
    var diff = v.get() - location.get();
    var hasSettled = !roundToTwoDecimals(diff);
    if (hasSettled) location.set(v);
    return hasSettled;
  }

  function direction() {
    return attractionDirection;
  }

  function useBaseSpeed() {
    return useSpeed(baseSpeed);
  }

  function useBaseMass() {
    return useMass(baseMass);
  }

  function useSpeed(n) {
    speed = n;
    return self;
  }

  function useMass(n) {
    mass = n;
    return self;
  }

  var self = {
    direction: direction,
    seek: seek,
    settle: settle,
    update: update,
    useBaseMass: useBaseMass,
    useBaseSpeed: useBaseSpeed,
    useMass: useMass,
    useSpeed: useSpeed
  };
  return self;
}

function ScrollBounds(limit, location, target, scrollBody) {
  var pullBackThreshold = 10;
  var disabled = false;

  function shouldConstrain() {
    if (disabled) return false;
    if (!limit.reachedAny(target.get())) return false;
    if (!limit.reachedAny(location.get())) return false;
    return true;
  }

  function constrain(pointerDown) {
    if (!shouldConstrain()) return;
    var friction = pointerDown ? 0.7 : 0.45;
    var diffToTarget = target.get() - location.get();
    target.subtract(diffToTarget * friction);

    if (!pointerDown && Math.abs(diffToTarget) < pullBackThreshold) {
      target.set(limit.constrain(target.get()));
      scrollBody.useSpeed(10).useMass(3);
    }
  }

  function toggleActive(active) {
    disabled = !active;
  }

  var self = {
    constrain: constrain,
    toggleActive: toggleActive
  };
  return self;
}

function ScrollContain(viewSize, contentSize, snaps, snapsAligned, containScroll) {
  var scrollBounds = Limit(-contentSize + viewSize, snaps[0]);
  var snapsBounded = snapsAligned.map(scrollBounds.constrain);
  var snapsContained = measureContained();

  function findDuplicates() {
    var startSnap = snapsBounded[0];
    var endSnap = arrayLast(snapsBounded);
    var min = snapsBounded.lastIndexOf(startSnap);
    var max = snapsBounded.indexOf(endSnap) + 1;
    return Limit(min, max);
  }

  function measureContained() {
    if (contentSize <= viewSize) return [scrollBounds.max];
    if (containScroll === 'keepSnaps') return snapsBounded;

    var _a = findDuplicates(),
        min = _a.min,
        max = _a.max;

    return snapsBounded.slice(min, max);
  }

  var self = {
    snapsContained: snapsContained
  };
  return self;
}

function ScrollLimit(contentSize, scrollSnaps, loop) {
  var limit = measureLimit();

  function measureLimit() {
    var startSnap = scrollSnaps[0];
    var endSnap = arrayLast(scrollSnaps);
    var min = loop ? startSnap - contentSize : endSnap;
    var max = startSnap;
    return Limit(min, max);
  }

  var self = {
    limit: limit
  };
  return self;
}

function ScrollLooper(contentSize, pxToPercent, limit, location, vectors) {
  var min = limit.min + pxToPercent.measure(0.1);
  var max = limit.max + pxToPercent.measure(0.1);

  var _a = Limit(min, max),
      reachedMin = _a.reachedMin,
      reachedMax = _a.reachedMax;

  function shouldLoop(direction) {
    if (direction === 1) return reachedMax(location.get());
    if (direction === -1) return reachedMin(location.get());
    return false;
  }

  function loop(direction) {
    if (!shouldLoop(direction)) return;
    var loopDistance = contentSize * (direction * -1);
    vectors.forEach(function (v) {
      return v.add(loopDistance);
    });
  }

  var self = {
    loop: loop
  };
  return self;
}

function ScrollProgress(limit) {
  var max = limit.max,
      scrollLength = limit.length;

  function get(n) {
    var currentLocation = n - max;
    return currentLocation / -scrollLength;
  }

  var self = {
    get: get
  };
  return self;
}

function ScrollSnap(axis, alignment, pxToPercent, containerRect, slideRects, slidesToScroll) {
  var startEdge = axis.startEdge,
      endEdge = axis.endEdge;
  var snaps = measureUnaligned();
  var snapsAligned = measureAligned();

  function measureSizes() {
    return groupArray(slideRects, slidesToScroll).map(function (rects) {
      return arrayLast(rects)[endEdge] - rects[0][startEdge];
    }).map(pxToPercent.measure).map(Math.abs);
  }

  function measureUnaligned() {
    return slideRects.map(function (rect) {
      return containerRect[startEdge] - rect[startEdge];
    }).map(pxToPercent.measure).map(function (snap) {
      return -Math.abs(snap);
    });
  }

  function measureAligned() {
    var groupedSnaps = groupArray(snaps, slidesToScroll).map(function (g) {
      return g[0];
    });
    var alignments = measureSizes().map(alignment.measure);
    return groupedSnaps.map(function (snap, index) {
      return snap + alignments[index];
    });
  }

  var self = {
    snaps: snaps,
    snapsAligned: snapsAligned
  };
  return self;
}

function ScrollTarget(loop, scrollSnaps, contentSize, limit, targetVector) {
  var reachedAny = limit.reachedAny,
      removeOffset = limit.removeOffset,
      constrain = limit.constrain;

  function minDistance(d1, d2) {
    return Math.abs(d1) < Math.abs(d2) ? d1 : d2;
  }

  function findTargetSnap(target) {
    var distance = loop ? removeOffset(target) : constrain(target);
    var ascDiffsToSnaps = scrollSnaps.map(function (scrollSnap) {
      return scrollSnap - distance;
    }).map(function (diffToSnap) {
      return shortcut(diffToSnap, 0);
    }).map(function (diff, i) {
      return {
        diff: diff,
        index: i
      };
    }).sort(function (d1, d2) {
      return Math.abs(d1.diff) - Math.abs(d2.diff);
    });
    var index = ascDiffsToSnaps[0].index;
    return {
      index: index,
      distance: distance
    };
  }

  function shortcut(target, direction) {
    var t1 = target;
    var t2 = target + contentSize;
    var t3 = target - contentSize;
    if (!loop) return t1;
    if (!direction) return minDistance(minDistance(t1, t2), t3);
    var shortest = minDistance(t1, direction === 1 ? t2 : t3);
    return Math.abs(shortest) * direction;
  }

  function byIndex(index, direction) {
    var diffToSnap = scrollSnaps[index] - targetVector.get();
    var distance = shortcut(diffToSnap, direction);
    return {
      index: index,
      distance: distance
    };
  }

  function byDistance(distance, snap) {
    var target = targetVector.get() + distance;

    var _a = findTargetSnap(target),
        index = _a.index,
        targetSnapDistance = _a.distance;

    var reachedBound = !loop && reachedAny(target);
    if (!snap || reachedBound) return {
      index: index,
      distance: distance
    };
    var diffToSnap = scrollSnaps[index] - targetSnapDistance;
    var snapDistance = distance + shortcut(diffToSnap, 0);
    return {
      index: index,
      distance: snapDistance
    };
  }

  var self = {
    byDistance: byDistance,
    byIndex: byIndex,
    shortcut: shortcut
  };
  return self;
}

function ScrollTo(animation, indexCurrent, indexPrevious, scrollTarget, targetVector, events) {
  function scrollTo(target) {
    var distanceDiff = target.distance;
    var indexDiff = target.index !== indexCurrent.get();

    if (distanceDiff) {
      animation.start();
      targetVector.add(distanceDiff);
    }

    if (indexDiff) {
      indexPrevious.set(indexCurrent.get());
      indexCurrent.set(target.index);
      events.emit('select');
    }
  }

  function distance(n, snap) {
    var target = scrollTarget.byDistance(n, snap);
    scrollTo(target);
  }

  function index(n, direction) {
    var targetIndex = indexCurrent.clone().set(n);
    var target = scrollTarget.byIndex(targetIndex.get(), direction);
    scrollTo(target);
  }

  var self = {
    distance: distance,
    index: index
  };
  return self;
}

function SlideLooper(axis, viewSize, contentSize, slideSizesWithGaps, scrollSnaps, slidesInView, scrollLocation, slides) {
  var ascItems = arrayKeys(slideSizesWithGaps);
  var descItems = arrayKeys(slideSizesWithGaps).reverse();
  var loopPoints = startPoints().concat(endPoints());

  function removeSlideSizes(indexes, from) {
    return indexes.reduce(function (a, i) {
      return a - slideSizesWithGaps[i];
    }, from);
  }

  function slidesInGap(indexes, gap) {
    return indexes.reduce(function (a, i) {
      var remainingGap = removeSlideSizes(a, gap);
      return remainingGap > 0 ? a.concat([i]) : a;
    }, []);
  }

  function findLoopPoints(indexes, edge) {
    var isStartEdge = edge === 'start';
    var offset = isStartEdge ? -contentSize : contentSize;
    var slideBounds = slidesInView.findSlideBounds(offset);
    return indexes.map(function (index) {
      var initial = isStartEdge ? 0 : -contentSize;
      var altered = isStartEdge ? contentSize : 0;
      var bounds = slideBounds.filter(function (b) {
        return b.index === index;
      })[0];
      var point = bounds[isStartEdge ? 'end' : 'start'];

      var getTarget = function getTarget() {
        return scrollLocation.get() > point ? initial : altered;
      };

      return {
        point: point,
        getTarget: getTarget,
        index: index,
        location: -1
      };
    });
  }

  function startPoints() {
    var gap = scrollSnaps[0] - 1;
    var indexes = slidesInGap(descItems, gap);
    return findLoopPoints(indexes, 'end');
  }

  function endPoints() {
    var gap = viewSize - scrollSnaps[0] - 1;
    var indexes = slidesInGap(ascItems, gap);
    return findLoopPoints(indexes, 'start');
  }

  function canLoop() {
    return loopPoints.every(function (_a) {
      var index = _a.index;
      var otherIndexes = ascItems.filter(function (i) {
        return i !== index;
      });
      return removeSlideSizes(otherIndexes, viewSize) <= 0;
    });
  }

  function loop() {
    loopPoints.forEach(function (loopPoint) {
      var getTarget = loopPoint.getTarget,
          location = loopPoint.location,
          index = loopPoint.index;
      var target = getTarget();

      if (target !== location) {
        slides[index].style[axis.startEdge] = target + "%";
        loopPoint.location = target;
      }
    });
  }

  function clear() {
    loopPoints.forEach(function (_a) {
      var index = _a.index;
      slides[index].style[axis.startEdge] = '';
    });
  }

  var self = {
    canLoop: canLoop,
    clear: clear,
    loop: loop,
    loopPoints: loopPoints
  };
  return self;
}

function SlideFocus(rootNode, scrollTo, slidesToScroll) {
  var eventStore = EventStore();
  var removeAllEvents = eventStore.removeAll;
  var lastTabPressTime = 0;

  function registerTabPress(event) {
    if (event.keyCode !== 9) return;
    lastTabPressTime = new Date().getTime();
  }

  function addFocusEvent(slide, index) {
    var focus = function focus() {
      var nowTime = new Date().getTime();
      var diffTime = nowTime - lastTabPressTime;
      if (diffTime > 10) return;
      rootNode.scrollLeft = 0;
      var selectedIndex = Math.floor(index / slidesToScroll);
      scrollTo.index(selectedIndex, 0);
    };

    eventStore.add(slide, 'focus', focus, true);
  }

  function addActivationEvents(slides) {
    eventStore.add(document, 'keydown', registerTabPress, false);
    slides.forEach(addFocusEvent);
  }

  var self = {
    addActivationEvents: addActivationEvents,
    removeAllEvents: removeAllEvents
  };
  return self;
}

function SlidesInView(viewSize, contentSize, slideSizes, snaps, loop, inViewThreshold) {
  var threshold = Math.min(Math.max(inViewThreshold, 0.01), 0.99);
  var offsets = loop ? [0, contentSize, -contentSize] : [0];
  var slideBounds = offsets.reduce(function (a, offset) {
    return a.concat(findSlideBounds(offset, threshold));
  }, []);

  function findSlideBounds(offset, threshold) {
    var thresholds = slideSizes.map(function (s) {
      return s * (threshold || 0);
    });
    return snaps.map(function (snap, index) {
      return {
        start: snap - slideSizes[index] + thresholds[index] + offset,
        end: snap + viewSize - thresholds[index] + offset,
        index: index
      };
    });
  }

  function check(location) {
    return slideBounds.reduce(function (list, slideBound) {
      var index = slideBound.index,
          start = slideBound.start,
          end = slideBound.end;
      var inList = list.indexOf(index) !== -1;
      var inView = start < location && end > location;
      return !inList && inView ? list.concat([index]) : list;
    }, []);
  }

  var self = {
    check: check,
    findSlideBounds: findSlideBounds
  };
  return self;
}

function SlideSizes(axis, pxToPercent, slides, slideRects, loop) {
  var measureSize = axis.measureSize,
      startEdge = axis.startEdge,
      endEdge = axis.endEdge;
  var sizesInPx = slideRects.map(measureSize);
  var slideSizes = sizesInPx.map(pxToPercent.measure);
  var slideSizesWithGaps = measureWithGaps();

  function measureWithGaps() {
    return slideRects.map(function (rect, index, rects) {
      var isLast = index === lastIndex(rects);
      var style = window.getComputedStyle(arrayLast(slides));
      var endGap = parseFloat(style.getPropertyValue("margin-" + endEdge));
      if (isLast) return sizesInPx[index] + (loop ? endGap : 0);
      return rects[index + 1][startEdge] - rect[startEdge];
    }).map(pxToPercent.measure).map(Math.abs);
  }

  var self = {
    slideSizes: slideSizes,
    slideSizesWithGaps: slideSizesWithGaps
  };
  return self;
}

function Translate(axis, direction, container) {
  var containerStyle = container.style;
  var translate = axis.scroll === 'x' ? x : y;
  var disabled = false;

  function x(n) {
    return "translate3d(" + n + "%,0px,0px)";
  }

  function y(n) {
    return "translate3d(0px," + n + "%,0px)";
  }

  function to(target) {
    if (disabled) return;
    containerStyle.transform = translate(direction.applyTo(target.get()));
  }

  function toggleActive(active) {
    disabled = !active;
  }

  function clear() {
    containerStyle.transform = '';
  }

  var self = {
    clear: clear,
    to: to,
    toggleActive: toggleActive
  };
  return self;
}

function Engine(root, container, slides, options, events) {
  // Options
  var align = options.align,
      scrollAxis = options.axis,
      contentDirection = options.direction,
      startIndex = options.startIndex,
      inViewThreshold = options.inViewThreshold,
      loop = options.loop,
      speed = options.speed,
      dragFree = options.dragFree,
      slidesToScroll = options.slidesToScroll,
      skipSnaps = options.skipSnaps,
      containScroll = options.containScroll; // Measurements

  var containerRect = container.getBoundingClientRect();
  var slideRects = slides.map(function (slide) {
    return slide.getBoundingClientRect();
  });
  var direction = Direction(contentDirection);
  var axis = Axis(scrollAxis, contentDirection);
  var pxToPercent = PxToPercent(axis.measureSize(containerRect));
  var viewSize = pxToPercent.totalPercent;
  var alignment = Alignment(align, viewSize);

  var _a = SlideSizes(axis, pxToPercent, slides, slideRects, loop),
      slideSizes = _a.slideSizes,
      slideSizesWithGaps = _a.slideSizesWithGaps;

  var _b = ScrollSnap(axis, alignment, pxToPercent, containerRect, slideRects, slidesToScroll),
      snaps = _b.snaps,
      snapsAligned = _b.snapsAligned;

  var contentSize = -arrayLast(snaps) + arrayLast(slideSizesWithGaps);
  var snapsContained = ScrollContain(viewSize, contentSize, snaps, snapsAligned, containScroll).snapsContained;
  var contain = !loop && containScroll !== '';
  var scrollSnaps = contain ? snapsContained : snapsAligned;
  var limit = ScrollLimit(contentSize, scrollSnaps, loop).limit; // Indexes

  var index = Counter(lastIndex(scrollSnaps), startIndex, loop);
  var indexPrevious = index.clone();
  var slideIndexes = arrayKeys(slides); // Draw

  var update = function update() {
    if (!loop) engine.scrollBounds.constrain(engine.dragHandler.pointerDown());
    engine.scrollBody.seek(target).update();
    var settled = engine.scrollBody.settle(target);

    if (settled && !engine.dragHandler.pointerDown()) {
      engine.animation.stop();
      events.emit('settle');
    }

    if (!settled) {
      events.emit('scroll');
    }

    if (loop) {
      engine.scrollLooper.loop(engine.scrollBody.direction());
      engine.slideLooper.loop();
    }

    engine.translate.to(location);
    engine.animation.proceed();
  }; // Shared


  var animation = Animation(update);
  var startLocation = scrollSnaps[index.get()];
  var location = Vector1D(startLocation);
  var target = Vector1D(startLocation);
  var scrollBody = ScrollBody(location, speed, 1);
  var scrollTarget = ScrollTarget(loop, scrollSnaps, contentSize, limit, target);
  var scrollTo = ScrollTo(animation, index, indexPrevious, scrollTarget, target, events);
  var slidesInView = SlidesInView(viewSize, contentSize, slideSizes, snaps, loop, inViewThreshold); // DragHandler

  var dragHandler = DragHandler(axis, direction, root, target, dragFree, DragTracker(axis, pxToPercent), location, animation, scrollTo, scrollBody, scrollTarget, index, events, loop, skipSnaps); // Slider

  var engine = {
    animation: animation,
    axis: axis,
    direction: direction,
    dragHandler: dragHandler,
    pxToPercent: pxToPercent,
    index: index,
    indexPrevious: indexPrevious,
    limit: limit,
    location: location,
    options: options,
    scrollBody: scrollBody,
    scrollBounds: ScrollBounds(limit, location, target, scrollBody),
    scrollLooper: ScrollLooper(contentSize, pxToPercent, limit, location, [location, target]),
    scrollProgress: ScrollProgress(limit),
    scrollSnaps: scrollSnaps,
    scrollTarget: scrollTarget,
    scrollTo: scrollTo,
    slideFocus: SlideFocus(root, scrollTo, slidesToScroll),
    slideLooper: SlideLooper(axis, viewSize, contentSize, slideSizesWithGaps, scrollSnaps, slidesInView, location, slides),
    slidesInView: slidesInView,
    slideIndexes: slideIndexes,
    target: target,
    translate: Translate(axis, direction, container)
  };
  return engine;
}

function EventEmitter() {
  var listeners = {};

  function getListeners(evt) {
    var eventListeners = listeners[evt];
    return eventListeners || [];
  }

  function emit(evt) {
    getListeners(evt).forEach(function (e) {
      return e(evt);
    });
    return self;
  }

  function on(evt, cb) {
    listeners[evt] = getListeners(evt).concat([cb]);
    return self;
  }

  function off(evt, cb) {
    listeners[evt] = getListeners(evt).filter(function (e) {
      return e !== cb;
    });
    return self;
  }

  var self = {
    emit: emit,
    off: off,
    on: on
  };
  return self;
}

var defaultOptions = {
  align: 'center',
  axis: 'x',
  containScroll: '',
  direction: 'ltr',
  dragFree: false,
  draggable: true,
  draggableClass: 'is-draggable',
  draggingClass: 'is-dragging',
  inViewThreshold: 0,
  loop: false,
  skipSnaps: true,
  selectedClass: 'is-selected',
  slidesToScroll: 1,
  speed: 10,
  startIndex: 0
};

function OptionsPseudo(node) {
  var pseudoString = getComputedStyle(node, ':before').content;

  function get() {
    try {
      return JSON.parse(pseudoString.slice(1, -1).replace(/\\/g, ''));
    } catch (error) {} // eslint-disable-line no-empty


    return {};
  }

  var self = {
    get: get
  };
  return self;
}

function EmblaCarousel(sliderRoot, userOptions) {
  var events = EventEmitter();
  var eventStore = EventStore();
  var debouncedResize = debounce(resize, 500);
  var reInit = reActivate;
  var on = events.on,
      off = events.off;
  var engine;
  var activated = false;

  var optionsBase = _extends({}, defaultOptions);

  var options = _extends({}, optionsBase);

  var optionsPseudo;
  var rootNodeSize = 0;
  var container;
  var slides;
  activate(userOptions);

  function setupElements() {
    if (!sliderRoot) throw new Error('Missing root node 😢');
    var sliderContainer = sliderRoot.querySelector('*');
    if (!sliderContainer) throw new Error('Missing container node 😢');
    container = sliderContainer;
    slides = Array.prototype.slice.call(container.children);
    optionsPseudo = OptionsPseudo(sliderRoot);
  }

  function activate(partialOptions) {
    setupElements();
    optionsBase = _extends({}, optionsBase, partialOptions);
    options = _extends({}, optionsBase, optionsPseudo.get());
    engine = Engine(sliderRoot, container, slides, options, events);
    eventStore.add(window, 'resize', debouncedResize);
    engine.translate.to(engine.location);
    rootNodeSize = engine.axis.measureSize(sliderRoot.getBoundingClientRect());

    if (options.loop) {
      if (!engine.slideLooper.canLoop()) {
        deActivate();
        return activate({
          loop: false
        });
      }

      engine.slideLooper.loop();
    }

    if (options.draggable && container.offsetParent && slides.length) {
      engine.dragHandler.addActivationEvents();

      if (options.draggableClass) {
        addClass(sliderRoot, options.draggableClass);
      }

      if (options.draggingClass) {
        events.on('pointerDown', toggleDraggingClass).on('pointerUp', toggleDraggingClass);
      }
    }

    if (slides.length) {
      engine.slideFocus.addActivationEvents(slides);
    }

    if (options.selectedClass) {
      toggleSelectedClass();
      events.on('select', toggleSelectedClass).on('pointerUp', toggleSelectedClass);
    }

    if (!activated) {
      setTimeout(function () {
        return events.emit('init');
      }, 0);
      activated = true;
    }
  }

  function toggleDraggingClass(evt) {
    var draggingClass = options.draggingClass;
    if (evt === 'pointerDown') addClass(sliderRoot, draggingClass);else removeClass(sliderRoot, draggingClass);
  }

  function toggleSelectedClass() {
    var selectedClass = options.selectedClass;
    var inView = slidesInView(true);
    var notInView = slidesNotInView(true);
    notInView.forEach(function (index) {
      return removeClass(slides[index], selectedClass);
    });
    inView.forEach(function (index) {
      return addClass(slides[index], selectedClass);
    });
  }

  function deActivate() {
    engine.dragHandler.removeAllEvents();
    engine.slideFocus.removeAllEvents();
    engine.animation.stop();
    eventStore.removeAll();
    engine.translate.clear();
    engine.slideLooper.clear();
    removeClass(sliderRoot, options.draggableClass);
    slides.forEach(function (slide) {
      return removeClass(slide, options.selectedClass);
    });
    events.off('select', toggleSelectedClass).off('pointerUp', toggleSelectedClass).off('pointerDown', toggleDraggingClass).off('pointerUp', toggleDraggingClass);
  }

  function reActivate(partialOptions) {
    if (!activated) return;
    var startIndex = selectedScrollSnap();

    var newOptions = _extends({
      startIndex: startIndex
    }, partialOptions);

    deActivate();
    activate(newOptions);
    events.emit('reInit');
  }

  function destroy() {
    if (!activated) return;
    deActivate();
    activated = false;
    events.emit('destroy');
  }

  function resize() {
    if (!activated) return;
    var size = engine.axis.measureSize(sliderRoot.getBoundingClientRect());
    if (rootNodeSize !== size) reActivate();
    events.emit('resize');
  }

  function slidesInView(target) {
    var location = engine[target ? 'target' : 'location'].get();
    var type = options.loop ? 'removeOffset' : 'constrain';
    return engine.slidesInView.check(engine.limit[type](location));
  }

  function slidesNotInView(target) {
    var inView = slidesInView(target);
    return engine.slideIndexes.filter(function (index) {
      return inView.indexOf(index) === -1;
    });
  }

  function scrollTo(index, jump, direction) {
    engine.scrollBody.useBaseMass().useSpeed(jump ? 100 : options.speed);
    if (activated) engine.scrollTo.index(index, direction || 0);
  }

  function scrollNext(jump) {
    var next = engine.index.clone().add(1);
    scrollTo(next.get(), jump === true, -1);
  }

  function scrollPrev(jump) {
    var prev = engine.index.clone().add(-1);
    scrollTo(prev.get(), jump === true, 1);
  }

  function canScrollNext() {
    var next = engine.index.clone().add(1);
    return next.get() !== selectedScrollSnap();
  }

  function canScrollPrev() {
    var prev = engine.index.clone().add(-1);
    return prev.get() !== selectedScrollSnap();
  }

  function scrollSnapList() {
    return engine.scrollSnaps.map(engine.scrollProgress.get);
  }

  function scrollProgress() {
    return engine.scrollProgress.get(engine.location.get());
  }

  function selectedScrollSnap() {
    return engine.index.get();
  }

  function previousScrollSnap() {
    return engine.indexPrevious.get();
  }

  function clickAllowed() {
    return engine.dragHandler.clickAllowed();
  }

  function dangerouslyGetEngine() {
    return engine;
  }

  function rootNode() {
    return sliderRoot;
  }

  function containerNode() {
    return container;
  }

  function slideNodes() {
    return slides;
  }

  var self = {
    canScrollNext: canScrollNext,
    canScrollPrev: canScrollPrev,
    clickAllowed: clickAllowed,
    containerNode: containerNode,
    dangerouslyGetEngine: dangerouslyGetEngine,
    destroy: destroy,
    off: off,
    on: on,
    previousScrollSnap: previousScrollSnap,
    reInit: reInit,
    rootNode: rootNode,
    scrollNext: scrollNext,
    scrollPrev: scrollPrev,
    scrollProgress: scrollProgress,
    scrollSnapList: scrollSnapList,
    scrollTo: scrollTo,
    selectedScrollSnap: selectedScrollSnap,
    slideNodes: slideNodes,
    slidesInView: slidesInView,
    slidesNotInView: slidesNotInView
  };
  return self;
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (EmblaCarousel);
//# sourceMappingURL=embla-carousel.esm.js.map


/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/embla.css":
/*!*********************************!*\
  !*** ./resources/css/embla.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_embla_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!../../node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./embla.css */ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./resources/css/embla.css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_embla_css__WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_embla_css__WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



var isOldIE = function isOldIE() {
  var memo;
  return function memorize() {
    if (typeof memo === 'undefined') {
      // Test for IE <= 9 as proposed by Browserhacks
      // @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
      // Tests for existence of standard globals is to allow style-loader
      // to operate correctly into non-standard environments
      // @see https://github.com/webpack-contrib/style-loader/issues/177
      memo = Boolean(window && document && document.all && !window.atob);
    }

    return memo;
  };
}();

var getTarget = function getTarget() {
  var memo = {};
  return function memorize(target) {
    if (typeof memo[target] === 'undefined') {
      var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself

      if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
        try {
          // This will throw an exception if access to iframe is blocked
          // due to cross-origin restrictions
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          // istanbul ignore next
          styleTarget = null;
        }
      }

      memo[target] = styleTarget;
    }

    return memo[target];
  };
}();

var stylesInDom = [];

function getIndexByIdentifier(identifier) {
  var result = -1;

  for (var i = 0; i < stylesInDom.length; i++) {
    if (stylesInDom[i].identifier === identifier) {
      result = i;
      break;
    }
  }

  return result;
}

function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];

  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var index = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3]
    };

    if (index !== -1) {
      stylesInDom[index].references++;
      stylesInDom[index].updater(obj);
    } else {
      stylesInDom.push({
        identifier: identifier,
        updater: addStyle(obj, options),
        references: 1
      });
    }

    identifiers.push(identifier);
  }

  return identifiers;
}

function insertStyleElement(options) {
  var style = document.createElement('style');
  var attributes = options.attributes || {};

  if (typeof attributes.nonce === 'undefined') {
    var nonce =  true ? __webpack_require__.nc : 0;

    if (nonce) {
      attributes.nonce = nonce;
    }
  }

  Object.keys(attributes).forEach(function (key) {
    style.setAttribute(key, attributes[key]);
  });

  if (typeof options.insert === 'function') {
    options.insert(style);
  } else {
    var target = getTarget(options.insert || 'head');

    if (!target) {
      throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
    }

    target.appendChild(style);
  }

  return style;
}

function removeStyleElement(style) {
  // istanbul ignore if
  if (style.parentNode === null) {
    return false;
  }

  style.parentNode.removeChild(style);
}
/* istanbul ignore next  */


var replaceText = function replaceText() {
  var textStore = [];
  return function replace(index, replacement) {
    textStore[index] = replacement;
    return textStore.filter(Boolean).join('\n');
  };
}();

function applyToSingletonTag(style, index, remove, obj) {
  var css = remove ? '' : obj.media ? "@media ".concat(obj.media, " {").concat(obj.css, "}") : obj.css; // For old IE

  /* istanbul ignore if  */

  if (style.styleSheet) {
    style.styleSheet.cssText = replaceText(index, css);
  } else {
    var cssNode = document.createTextNode(css);
    var childNodes = style.childNodes;

    if (childNodes[index]) {
      style.removeChild(childNodes[index]);
    }

    if (childNodes.length) {
      style.insertBefore(cssNode, childNodes[index]);
    } else {
      style.appendChild(cssNode);
    }
  }
}

function applyToTag(style, options, obj) {
  var css = obj.css;
  var media = obj.media;
  var sourceMap = obj.sourceMap;

  if (media) {
    style.setAttribute('media', media);
  } else {
    style.removeAttribute('media');
  }

  if (sourceMap && typeof btoa !== 'undefined') {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  } // For old IE

  /* istanbul ignore if  */


  if (style.styleSheet) {
    style.styleSheet.cssText = css;
  } else {
    while (style.firstChild) {
      style.removeChild(style.firstChild);
    }

    style.appendChild(document.createTextNode(css));
  }
}

var singleton = null;
var singletonCounter = 0;

function addStyle(obj, options) {
  var style;
  var update;
  var remove;

  if (options.singleton) {
    var styleIndex = singletonCounter++;
    style = singleton || (singleton = insertStyleElement(options));
    update = applyToSingletonTag.bind(null, style, styleIndex, false);
    remove = applyToSingletonTag.bind(null, style, styleIndex, true);
  } else {
    style = insertStyleElement(options);
    update = applyToTag.bind(null, style, options);

    remove = function remove() {
      removeStyleElement(style);
    };
  }

  update(obj);
  return function updateStyle(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap) {
        return;
      }

      update(obj = newObj);
    } else {
      remove();
    }
  };
}

module.exports = function (list, options) {
  options = options || {}; // Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
  // tags it will allow on a page

  if (!options.singleton && typeof options.singleton !== 'boolean') {
    options.singleton = isOldIE();
  }

  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];

    if (Object.prototype.toString.call(newList) !== '[object Array]') {
      return;
    }

    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDom[index].references--;
    }

    var newLastIdentifiers = modulesToDom(newList, options);

    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];

      var _index = getIndexByIdentifier(_identifier);

      if (stylesInDom[_index].references === 0) {
        stylesInDom[_index].updater();

        stylesInDom.splice(_index, 1);
      }
    }

    lastIdentifiers = newLastIdentifiers;
  };
};

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
/******/ 			id: moduleId,
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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;