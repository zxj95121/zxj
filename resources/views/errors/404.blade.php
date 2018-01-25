<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>404错误页面</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<style type="text/css">
	/*重设*/
html {
	margin: 0;
	padding: 0;
	border: 0;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
code,
del,
dfn,
em,
q,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
legend,
caption,
tbody,
tfoot,
thead,
article,
aside,
dialog,
figure,
footer,
header,
hgroup,
nav,
section {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 14px;
	font: inherit;
	vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
dialog,
footer,
header,
hgroup,
menu,
nav,
section {
	display: block;
}

body {
	font-size: 14px;
	color: #333;
	background: #fff;
	font-family: "Microsoft YaHei", "simsun", "Helvetica Neue", Arial, Helvetica, sans-serif;
}

img {
	border: 0;
	vertical-align: bottom;
}

::-webkit-input-placeholder {
	color: #999;
}

:-moz-placeholder {
	color: #999;
}

::-moz-placeholder {
	color: #999;
}

:-ms-input-placeholder {
	color: #ccc;
}

* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

*:before,
*:after {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	padding: 0;
	border: 0;
}

textarea {
	overflow: auto;
}

input:focus,
textarea:focus,
button:focus,
select:focus {
	outline: none;
}

input::-ms-clear {
	display: none;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
	display: block;
}

audio,
canvas,
progress,
video {
	display: inline-block;
	vertical-align: baseline;
}

audio:not([controls]) {
	display: none;
	height: 0;
}

[hidden],
template {
	display: none;
}

a {
	background: transparent;
}

a:active,
a:hover {
	outline: 0;
}

a:focus {
	outline: thin dotted;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}

abbr[title] {
	border-bottom: 1px dotted;
}

b,
strong {
	font-weight: bold;
}

dfn {
	font-style: italic;
}

mark {
	color: #000;
	background: #ff0;
}

small {
	font-size: 80%;
}

sub,
sup {
	position: relative;
	font-size: 75%;
	line-height: 0;
	vertical-align: baseline;
}

sup {
	top: -.5em;
}

sub {
	bottom: -.25em;
}

svg:not(:root) {
	overflow: hidden;
}

figure {
	margin: 1em 40px;
}

hr {
	height: 0;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

pre {
	overflow: auto;
}

code,
kbd,
pre,
samp {
	font-family: monospace, monospace;
	font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
	margin: 0;
	font: inherit;
}

button {
	overflow: visible;
}

button,
select {
	text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}

button[disabled],
html input[disabled] {
	cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	padding: 0;
	border: 0;
}

input {
	line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
	box-sizing: border-box;
	padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

input[type="search"] {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	-webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

fieldset {
	padding: .35em .625em .75em;
	margin: 0 2px;
	border: 1px solid #c0c0c0;
}

legend {
	padding: 0;
	border: 0;
}

optgroup {
	font-weight: bold;
}

table {
	border-spacing: 0;
	border-collapse: collapse;
}

td,
th {
	padding: 0;
}


/*按钮*/

.button {
	border: solid 1px #ddd;
	background: transparent;
	border-radius: 4px;
	font-size: 14px;
	padding: 6px 15px;
	margin: 0;
	display: inline-block;
	line-height: 20px;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.button[disabled] {
	pointer-events: none;
	cursor: not-allowed;
	webkit-box-shadow: none;
	box-shadow: none;
	filter: alpha(opacity=50);
	opacity: .5;
}

.button:active {
	background-image: none;
	outline: 0;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.button:hover {
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.button-block {
	display: block;
	width: 100%;
}

.button-large {
	padding: 15px 20px;
	font-size: 24px;
	line-height: 24px;
}

.button-big {
	padding: 10px 15px;
	font-size: 18px;
	line-height: 22px;
}

.button-small {
	padding: 5px 10px;
	font-size: 12px;
	font-weight: normal;
	line-height: 18px;
}

.button-little {
	padding: 3px 5px;
	font-size: 12px;
	font-weight: normal;
	line-height: 16px;
}

.button.bg-main,
.button.bg-sub,
.button.bg-dot,
.button.bg-black,
.button.bg-gray,
.button.bg-red,
.button.bg-yellow,
.button.bg-blue,
.button.bg-green {
	color: #fff;
}


/*-----------------------元件--------------------------*/


/*容器*/

.layout {
	width: 100%;
}

.container,
.container-layout {
	margin: 0 auto;
	padding: 0 10px;
}

@media (min-width: 760px) {
	.container {
		width: 750px;
	}
}

@media (min-width: 1000px) {
	.container {
		width: 1000px;
	}
}

@media (min-width: 1200px) {
	.container {
		width: 1200px;
	}
}


/*网格*/


/*默认x,大xb,中xm,小xs*/

.line {
	margin: 0;
	padding: 0;
}

.x1,
.x2,
.x3,
.x4,
.x5,
.x6,
.x7,
.x8,
.x9,
.x10,
.x11,
.x12,
.xl1,
.xl2,
.xl3,
.xl4,
.xl5,
.xl6,
.xl7,
.xl8,
.xl9,
.xl10,
.xl11,
.xl12,
.xs1,
.xs2,
.xs3,
.xs4,
.xs5,
.xs6,
.xs7,
.xs8,
.xs9,
.xs10,
.xs11,
.xs12,
.xm1,
.xm2,
.xm3,
.xm4,
.xm5,
.xm6,
.xm7,
.xm8,
.xm9,
.xm10,
.xm11,
.xm12,
.xb1,
.xb2,
.xb3,
.xb4,
.xb5,
.xb6,
.xb7,
.xb8,
.xb9,
.xb10,
.xb11,
.xb12 {
	position: relative;
	min-height: 1px;
}

.line-big {
	margin-left: -10px;
	margin-right: -10px;
}

.line-big .x1,
.line-big .x2,
.line-big .x3,
.line-big .x4,
.line-big .x5,
.line-big .x6,
.line-big .x7,
.line-big .x8,
.line-big .x9,
.line-big .x10,
.line-big .x11,
.line-big .x12,
.line-big .xl1,
.line-big .xl2,
.line-big .xl3,
.line-big .xl4,
.line-big .xl5,
.line-big .xl6,
.line-big .xl7,
.line-big .xl8,
.line-big .xl9,
.line-big .xl10,
.line-big .xl11,
.line-big .xl12,
.line-big .xs1,
.line-big .xs2,
.line-big .xs3,
.line-big .xs4,
.line-big .xs5,
.line-big .xs6,
.line-big .xs7,
.line-big .xs8,
.line-big .xs9,
.line-big .xs10,
.line-big .xs11,
.line-big .xs12,
.line-big .xm1,
.line-big .xm2,
.line-big .xm3,
.line-big .xm4,
.line-big .xm5,
.line-big .xm6,
.line-big .xm7,
.line-big .xm8,
.line-big .xm9,
.line-big .xm10,
.line-big .xm11,
.line-big .xm12,
.line-big .xb1,
.line-big .xb2,
.line-big .xb3,
.line-big .xb4,
.line-big .xb5,
.line-big .xb6,
.line-big .xb7,
.line-big .xb8,
.line-big .xb9,
.line-big .xb10,
.line-big .xb11,
.line-big .xb12 {
	position: relative;
	min-height: 1px;
	padding-right: 10px;
	padding-left: 10px;
}

.line-middle {
	margin-left: -5px;
	margin-right: -5px;
}

.line-middle .x1,
.line-middle .x2,
.line-middle .x3,
.line-middle .x4,
.line-middle .x5,
.line-middle .x6,
.line-middle .x7,
.line-middle .x8,
.line-middle .x9,
.line-middle .x10,
.line-middle .x11,
.line-middle .x12,
.line-middle .xl1,
.line-middle .xl2,
.line-middle .xl3,
.line-middle .xl4,
.line-middle .xl5,
.line-middle .xl6,
.line-middle .xl7,
.line-middle .xl8,
.line-middle .xl9,
.line-middle .xl10,
.line-middle .xl11,
.line-middle .xl12,
.line-middle .xs1,
.line-middle .xs2,
.line-middle .xs3,
.line-middle .xs4,
.line-middle .xs5,
.line-middle .xs6,
.line-middle .xs7,
.line-middle .xs8,
.line-middle .xs9,
.line-middle .xs10,
.line-middle .xs11,
.line-middle .xs12,
.line-middle .xm1,
.line-middle .xm2,
.line-middle .xm3,
.line-middle .xm4,
.line-middle .xm5,
.line-middle .xm6,
.line-middle .xm7,
.line-middle .xm8,
.line-middle .xm9,
.line-middle .xm10,
.line-middle .xm11,
.line-middle .xm12,
.line-middle .xb1,
.line-middle .xb2,
.line-middle .xb3,
.line-middle .xb4,
.line-middle .xb5,
.line-middle .xb6,
.line-middle .xb7,
.line-middle .xb8,
.line-middle .xb9,
.line-middle .xb10,
.line-middle .xb11,
.line-middle .xb12 {
	position: relative;
	min-height: 1px;
	padding-right: 5px;
	padding-left: 5px;
}

.line-small {
	margin-left: -2px;
	margin-right: -2px;
}

.line-small .x1,
.line-small .x2,
.line-small .x3,
.line-small .x4,
.line-small .x5,
.line-small .x6,
.line-small .x7,
.line-small .x8,
.line-small .x9,
.line-small .x10,
.line-small .x11,
.line-small .x12,
.line-small .xl1,
.line-small .xl2,
.line-small .xl3,
.line-small .xl4,
.line-small .xl5,
.line-small .xl6,
.line-small .xl7,
.line-small .xl8,
.line-small .xl9,
.line-small .xl10,
.line-small .xl11,
.line-small .xl12,
.line-small .xs1,
.line-small .xs2,
.line-small .xs3,
.line-small .xs4,
.line-small .xs5,
.line-small .xs6,
.line-small .xs7,
.line-small .xs8,
.line-small .xs9,
.line-small .xs10,
.line-small .xs11,
.line-small .xs12,
.line-small .xm1,
.line-small .xm2,
.line-small .xm3,
.line-small .xm4,
.line-small .xm5,
.line-small .xm6,
.line-small .xm7,
.line-small .xm8,
.line-small .xm9,
.line-small .xm10,
.line-small .xm11,
.line-small .xm12,
.line-small .xb1,
.line-small .xb2,
.line-small .xb3,
.line-small .xb4,
.line-small .xb5,
.line-small .xb6,
.line-small .xb7,
.line-small .xb8,
.line-small .xb9,
.line-small .xb10,
.line-small .xb11,
.line-small .xb12 {
	position: relative;
	min-height: 1px;
	padding-right: 2px;
	padding-left: 2px;
}

.x1,
.x2,
.x3,
.x4,
.x5,
.x6,
.x7,
.x8,
.x9,
.x10,
.x11,
.x12 {
	float: left;
}

.x1 {
	width: 8.33333333%;
}

.x2 {
	width: 16.66666667%;
}

.x3 {
	width: 25%;
}

.x4 {
	width: 33.33333333%;
}

.x5 {
	width: 41.66666667%;
}

.x6 {
	width: 50%;
}

.x7 {
	width: 58.33333333%;
}

.x8 {
	width: 66.66666667%;
}

.x9 {
	width: 75%;
}

.x10 {
	width: 83.33333333%;
}

.x11 {
	width: 91.66666667%;
}

.x12 {
	width: 100%;
}

.x0-left {
	left: 0;
}

.x1-left {
	left: 8.33333333%;
}

.x2-left {
	left: 16.66666667%;
}

.x3-left {
	left: 25%;
}

.x4-left {
	left: 33.33333333%;
}

.x5-left {
	left: 41.66666667%;
}

.x6-left {
	left: 50%;
}

.x7-left {
	left: 58.33333333%;
}

.x8-left {
	left: 66.66666667%;
}

.x9-left {
	left: 75%;
}

.x10-left {
	left: 83.33333333%;
}

.x11-left {
	left: 91.66666667%;
}

.x12-left {
	left: 100%;
}

.x0-right {
	right: 0;
}

.x1-right {
	right: 8.33333333%;
}

.x2-right {
	right: 16.66666667%;
}

.x3-right {
	right: 25%;
}

.x4-right {
	right: 33.33333333%;
}

.x5-right {
	right: 41.66666667%;
}

.x6-right {
	right: 50%;
}

.x7-right {
	right: 58.33333333%;
}

.x8-right {
	right: 66.66666667%;
}

.x9-right {
	right: 75%;
}

.x10-right {
	right: 83.33333333%;
}

.x11-right {
	right: 91.66666667%;
}

.x12-right {
	right: 100%;
}

.x0-move {
	margin-left: 0;
}

.x1-move {
	margin-left: 8.33333333%;
}

.x2-move {
	margin-left: 16.66666667%;
}

.x3-move {
	margin-left: 25%;
}

.x4-move {
	margin-left: 33.33333333%;
}

.x5-move {
	margin-left: 41.66666667%;
}

.x6-move {
	margin-left: 50%;
}

.x7-move {
	margin-left: 58.33333333%;
}

.x8-move {
	margin-left: 66.66666667%;
}

.x9-move {
	margin-left: 75%;
}

.x10-move {
	margin-left: 83.33333333%;
}

.x11-move {
	margin-left: 91.66666667%;
}

.x12-move {
	margin-left: 100%;
}

@media (min-width: 300px) {
	.xl1,
	.xl2,
	.xl3,
	.xl4,
	.xl5,
	.xl6,
	.xl7,
	.xl8,
	.xl9,
	.xl10,
	.xl11,
	.xl12 {
		float: left;
	}
	.xl1 {
		width: 8.33333333%;
	}
	.xl2 {
		width: 16.66666667%;
	}
	.xl3 {
		width: 25%;
	}
	.xl4 {
		width: 33.33333333%;
	}
	.xl5 {
		width: 41.66666667%;
	}
	.xl6 {
		width: 50%;
	}
	.xl7 {
		width: 58.33333333%;
	}
	.xl8 {
		width: 66.66666667%;
	}
	.xl9 {
		width: 75%;
	}
	.xl10 {
		width: 83.33333333%;
	}
	.xl11 {
		width: 91.66666667%;
	}
	.xl12 {
		width: 100%;
	}
	.xl0-left {
		left: 0;
	}
	.xl1-left {
		left: 8.33333333%;
	}
	.xl2-left {
		left: 16.66666667%;
	}
	.xl3-left {
		left: 25%;
	}
	.xl4-left {
		left: 33.33333333%;
	}
	.xl5-left {
		left: 41.66666667%;
	}
	.xl6-left {
		left: 50%;
	}
	.xl7-left {
		left: 58.33333333%;
	}
	.xl8-left {
		left: 66.66666667%;
	}
	.xl9-left {
		left: 75%;
	}
	.xl10-left {
		left: 83.33333333%;
	}
	.xl11-left {
		left: 91.66666667%;
	}
	.xl12-left {
		left: 100%;
	}
	.xl0-right {
		right: 0;
	}
	.xl1-right {
		right: 8.33333333%;
	}
	.xl2-right {
		right: 16.66666667%;
	}
	.xl3-right {
		right: 25%;
	}
	.xl4-right {
		right: 33.33333333%;
	}
	.xl5-right {
		right: 41.66666667%;
	}
	.xl6-right {
		right: 50%;
	}
	.xl7-right {
		right: 58.33333333%;
	}
	.xl8-right {
		right: 66.66666667%;
	}
	.xl9-right {
		right: 75%;
	}
	.xl10-right {
		right: 83.33333333%;
	}
	.xl11-right {
		right: 91.66666667%;
	}
	.xl12-right {
		right: 100%;
	}
	.xl0-move {
		margin-left: 0;
	}
	.xl1-move {
		margin-left: 8.33333333%;
	}
	.xl2-move {
		margin-left: 16.66666667%;
	}
	.xl3-move {
		margin-left: 25%;
	}
	.xl4-move {
		margin-left: 33.33333333%;
	}
	.xl5-move {
		margin-left: 41.66666667%;
	}
	.xl6-move {
		margin-left: 50%;
	}
	.xl7-move {
		margin-left: 58.33333333%;
	}
	.xl8-move {
		margin-left: 66.66666667%;
	}
	.xl9-move {
		margin-left: 75%;
	}
	.xl10-move {
		margin-left: 83.33333333%;
	}
	.xl11-move {
		margin-left: 91.66666667%;
	}
	.xl12-move {
		margin-left: 100%;
	}
}

@media (min-width: 760px) {
	.xs1,
	.xs2,
	.xs3,
	.xs4,
	.xs5,
	.xs6,
	.xs7,
	.xs8,
	.xs9,
	.xs10,
	.xs11,
	.xs12 {
		float: left;
	}
	.xs1 {
		width: 8.33333333%;
	}
	.xs2 {
		width: 16.66666667%;
	}
	.xs3 {
		width: 25%;
	}
	.xs4 {
		width: 33.33333333%;
	}
	.xs5 {
		width: 41.66666667%;
	}
	.xs6 {
		width: 50%;
	}
	.xs7 {
		width: 58.33333333%;
	}
	.xs8 {
		width: 66.66666667%;
	}
	.xs9 {
		width: 75%;
	}
	.xs10 {
		width: 83.33333333%;
	}
	.xs11 {
		width: 91.66666667%;
	}
	.xs12 {
		width: 100%;
	}
	.xs0-left {
		left: 0;
	}
	.xs1-left {
		left: 8.33333333%;
	}
	.xs2-left {
		left: 16.66666667%;
	}
	.xs3-left {
		left: 25%;
	}
	.xs4-left {
		left: 33.33333333%;
	}
	.xs5-left {
		left: 41.66666667%;
	}
	.xs6-left {
		left: 50%;
	}
	.xs7-left {
		left: 58.33333333%;
	}
	.xs8-left {
		left: 66.66666667%;
	}
	.xs9-left {
		left: 75%;
	}
	.xs10-left {
		left: 83.33333333%;
	}
	.xs11-left {
		left: 91.66666667%;
	}
	.xs12-left {
		left: 100%;
	}
	.xs0-right {
		right: 0;
	}
	.xs1-right {
		right: 8.33333333%;
	}
	.xs2-right {
		right: 16.66666667%;
	}
	.xs3-right {
		right: 25%;
	}
	.xs4-right {
		right: 33.33333333%;
	}
	.xs5-right {
		right: 41.66666667%;
	}
	.xs6-right {
		right: 50%;
	}
	.xs7-right {
		right: 58.33333333%;
	}
	.xs8-right {
		right: 66.66666667%;
	}
	.xs9-right {
		right: 75%;
	}
	.xs10-right {
		right: 83.33333333%;
	}
	.xs11-right {
		right: 91.66666667%;
	}
	.xs12-right {
		right: 100%;
	}
	.xs0-move {
		margin-left: 0;
	}
	.xs1-move {
		margin-left: 8.33333333%;
	}
	.xs2-move {
		margin-left: 16.66666667%;
	}
	.xs3-move {
		margin-left: 25%;
	}
	.xs4-move {
		margin-left: 33.33333333%;
	}
	.xs5-move {
		margin-left: 41.66666667%;
	}
	.xs6-move {
		margin-left: 50%;
	}
	.xs7-move {
		margin-left: 58.33333333%;
	}
	.xs8-move {
		margin-left: 66.66666667%;
	}
	.xs9-move {
		margin-left: 75%;
	}
	.xs10-move {
		margin-left: 83.33333333%;
	}
	.xs11-move {
		margin-left: 91.66666667%;
	}
	.xs12-move {
		margin-left: 100%;
	}
}

@media (min-width: 1000px) {
	.xm1,
	.xm2,
	.xm3,
	.xm4,
	.xm5,
	.xm6,
	.xm7,
	.xm8,
	.xm9,
	.xm10,
	.xm11,
	.xm12 {
		float: left;
	}
	.xm1 {
		width: 8.33333333%;
	}
	.xm2 {
		width: 16.66666667%;
	}
	.xm3 {
		width: 25%;
	}
	.xm4 {
		width: 33.33333333%;
	}
	.xm5 {
		width: 41.66666667%;
	}
	.xm6 {
		width: 50%;
	}
	.xm7 {
		width: 58.33333333%;
	}
	.xm8 {
		width: 66.66666667%;
	}
	.xm9 {
		width: 75%;
	}
	.xm10 {
		width: 83.33333333%;
	}
	.xm11 {
		width: 91.66666667%;
	}
	.xm12 {
		width: 100%;
	}
	.xm0-left {
		left: 0;
	}
	.xm1-left {
		left: 8.33333333%;
	}
	.xm2-left {
		left: 16.66666667%;
	}
	.xm3-left {
		left: 25%;
	}
	.xm4-left {
		left: 33.33333333%;
	}
	.xm5-left {
		left: 41.66666667%;
	}
	.xm6-left {
		left: 50%;
	}
	.xm7-left {
		left: 58.33333333%;
	}
	.xm8-left {
		left: 66.66666667%;
	}
	.xm9-left {
		left: 75%;
	}
	.xm10-left {
		left: 83.33333333%;
	}
	.xm11-left {
		left: 91.66666667%;
	}
	.xm12-left {
		left: 100%;
	}
	.xm0-right {
		right: 0;
	}
	.xm1-right {
		right: 8.33333333%;
	}
	.xm2-right {
		right: 16.66666667%;
	}
	.xm3-right {
		right: 25%;
	}
	.xm4-right {
		right: 33.33333333%;
	}
	.xm5-right {
		right: 41.66666667%;
	}
	.xm6-right {
		right: 50%;
	}
	.xm7-right {
		right: 58.33333333%;
	}
	.xm8-right {
		right: 66.66666667%;
	}
	.xm9-right {
		right: 75%;
	}
	.xm10-right {
		right: 83.33333333%;
	}
	.xm11-right {
		right: 91.66666667%;
	}
	.xm12-right {
		right: 100%;
	}
	.xm0-move {
		margin-left: 0;
	}
	.xm1-move {
		margin-left: 8.33333333%;
	}
	.xm2-move {
		margin-left: 16.66666667%;
	}
	.xm3-move {
		margin-left: 25%;
	}
	.xm4-move {
		margin-left: 33.33333333%;
	}
	.xm5-move {
		margin-left: 41.66666667%;
	}
	.xm6-move {
		margin-left: 50%;
	}
	.xm7-move {
		margin-left: 58.33333333%;
	}
	.xm8-move {
		margin-left: 66.66666667%;
	}
	.xm9-move {
		margin-left: 75%;
	}
	.xm10-move {
		margin-left: 83.33333333%;
	}
	.xm11-move {
		margin-left: 91.66666667%;
	}
	.xm12-move {
		margin-left: 100%;
	}
}

@media (min-width: 1200px) {
	.xb1,
	.xb2,
	.xb3,
	.xb4,
	.xb5,
	.xb6,
	.xb7,
	.xb8,
	.xb9,
	.xb10,
	.xb11,
	.xb12 {
		float: left;
	}
	.xb1 {
		width: 8.33333333%;
	}
	.xb2 {
		width: 16.66666667%;
	}
	.xb3 {
		width: 25%;
	}
	.xb4 {
		width: 33.33333333%;
	}
	.xb5 {
		width: 41.66666667%;
	}
	.xb6 {
		width: 50%;
	}
	.xb7 {
		width: 58.33333333%;
	}
	.xb8 {
		width: 66.66666667%;
	}
	.xb9 {
		width: 75%;
	}
	.xb10 {
		width: 83.33333333%;
	}
	.xb11 {
		width: 91.66666667%;
	}
	.xb12 {
		width: 100%;
	}
	.xb0-left {
		left: 0;
	}
	.xb1-left {
		left: 8.33333333%;
	}
	.xb2-left {
		left: 16.66666667%;
	}
	.xb3-left {
		left: 25%;
	}
	.xb4-left {
		left: 33.33333333%;
	}
	.xb5-left {
		left: 41.66666667%;
	}
	.xb6-left {
		left: 50%;
	}
	.xb7-left {
		left: 58.33333333%;
	}
	.xb8-left {
		left: 66.66666667%;
	}
	.xb9-left {
		left: 75%;
	}
	.xb10-left {
		left: 83.33333333%;
	}
	.xb11-left {
		left: 91.66666667%;
	}
	.xb12-left {
		left: 100%;
	}
	.xb0-right {
		right: 0;
	}
	.xb1-right {
		right: 8.33333333%;
	}
	.xb2-right {
		right: 16.66666667%;
	}
	.xb3-right {
		right: 25%;
	}
	.xb4-right {
		right: 33.33333333%;
	}
	.xb5-right {
		right: 41.66666667%;
	}
	.xb6-right {
		right: 50%;
	}
	.xb7-right {
		right: 58.33333333%;
	}
	.xb8-right {
		right: 66.66666667%;
	}
	.xb9-right {
		right: 75%;
	}
	.xb10-right {
		right: 83.33333333%;
	}
	.xb11-right {
		right: 91.66666667%;
	}
	.xb12-right {
		right: 100%;
	}
	.xb0-move {
		margin-left: 0;
	}
	.xb1-move {
		margin-left: 8.33333333%;
	}
	.xb2-move {
		margin-left: 16.66666667%;
	}
	.xb3-move {
		margin-left: 25%;
	}
	.xb4-move {
		margin-left: 33.33333333%;
	}
	.xb5-move {
		margin-left: 41.66666667%;
	}
	.xb6-move {
		margin-left: 50%;
	}
	.xb7-move {
		margin-left: 58.33333333%;
	}
	.xb8-move {
		margin-left: 66.66666667%;
	}
	.xb9-move {
		margin-left: 75%;
	}
	.xb10-move {
		margin-left: 83.33333333%;
	}
	.xb11-move {
		margin-left: 91.66666667%;
	}
	.xb12-move {
		margin-left: 100%;
	}
}


/*响应式显示*/

@media (max-width: 760px) {
	.show-l {
		display: block !important;
	}
	.hidden-l {
		display: none !important;
	}
}

@media (min-width: 761px) and (max-width: 1000px) {
	.show-s {
		display: block !important;
	}
	.hidden-s {
		display: none !important;
	}
}

@media (min-width: 1001px) and (max-width: 1200px) {
	.show-m {
		display: block !important;
	}
	.hidden-m {
		display: none !important;
	}
}

@media (min-width: 1201px) {
	.show-b {
		display: block !important;
	}
	.hidden-b {
		display: none !important;
	}
}


/*小图标*/

@font-face {
	font-family: 'FontAwesome';
	src: url('http://libs.baidu.com/fontawesome/4.1.0/fonts/fontawesome-webfont.eot?v=4.1.0');
	src: url('http://libs.baidu.com/fontawesome/4.1.0/fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype'), url('http://libs.baidu.com/fontawesome/4.1.0/fonts/fontawesome-webfont.woff?v=4.1.0') format('woff'), url('http://libs.baidu.com/fontawesome/4.1.0/fonts/fontawesome-webfont.ttf?v=4.1.0') format('truetype'), url('http://libs.baidu.com/fontawesome/4.1.0/fonts/fontawesome-webfont.svg?v=4.1.0#fontawesomeregular') format('svg');
	font-weight: normal;
	font-style: normal;
}

[class*='icon-']:before {
	display: inline-block;
	font-family: "FontAwesome";
	font-weight: normal;
	font-style: normal;
	vertical-align: baseline;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.icon-glass:before {
	content: "\f000";
}

.icon-music:before {
	content: "\f001";
}

.icon-search:before {
	content: "\f002";
}

.icon-envelope-o:before {
	content: "\f003";
}

.icon-heart:before {
	content: "\f004";
}

.icon-star:before {
	content: "\f005";
}

.icon-star-o:before {
	content: "\f006";
}

.icon-user:before {
	content: "\f007";
}

.icon-film:before {
	content: "\f008";
}

.icon-th-large:before {
	content: "\f009";
}

.icon-th:before {
	content: "\f00a";
}

.icon-th-list:before {
	content: "\f00b";
}

.icon-check:before {
	content: "\f00c";
}

.icon-times:before {
	content: "\f00d";
}

.icon-search-plus:before {
	content: "\f00e";
}

.icon-search-minus:before {
	content: "\f010";
}

.icon-power-off:before {
	content: "\f011";
}

.icon-signal:before {
	content: "\f012";
}

.icon-gear:before,
.icon-cog:before {
	content: "\f013";
}

.icon-trash-o:before {
	content: "\f014";
}

.icon-home:before {
	content: "\f015";
}

.icon-file-o:before {
	content: "\f016";
}

.icon-clock-o:before {
	content: "\f017";
}

.icon-road:before {
	content: "\f018";
}

.icon-download:before {
	content: "\f019";
}

.icon-arrow-circle-o-down:before {
	content: "\f01a";
}

.icon-arrow-circle-o-up:before {
	content: "\f01b";
}

.icon-inbox:before {
	content: "\f01c";
}

.icon-play-circle-o:before {
	content: "\f01d";
}

.icon-rotate-right:before,
.icon-repeat:before {
	content: "\f01e";
}

.icon-refresh:before {
	content: "\f021";
}

.icon-list-alt:before {
	content: "\f022";
}

.icon-lock:before {
	content: "\f023";
}

.icon-flag:before {
	content: "\f024";
}

.icon-headphones:before {
	content: "\f025";
}

.icon-volume-off:before {
	content: "\f026";
}

.icon-volume-down:before {
	content: "\f027";
}

.icon-volume-up:before {
	content: "\f028";
}

.icon-qrcode:before {
	content: "\f029";
}

.icon-barcode:before {
	content: "\f02a";
}

.icon-tag:before {
	content: "\f02b";
}

.icon-tags:before {
	content: "\f02c";
}

.icon-book:before {
	content: "\f02d";
}

.icon-bookmark:before {
	content: "\f02e";
}

.icon-print:before {
	content: "\f02f";
}

.icon-camera:before {
	content: "\f030";
}

.icon-font:before {
	content: "\f031";
}

.icon-bold:before {
	content: "\f032";
}

.icon-italic:before {
	content: "\f033";
}

.icon-text-height:before {
	content: "\f034";
}

.icon-text-width:before {
	content: "\f035";
}

.icon-align-left:before {
	content: "\f036";
}

.icon-align-center:before {
	content: "\f037";
}

.icon-align-right:before {
	content: "\f038";
}

.icon-align-justify:before {
	content: "\f039";
}

.icon-list:before {
	content: "\f03a";
}

.icon-dedent:before,
.icon-outdent:before {
	content: "\f03b";
}

.icon-indent:before {
	content: "\f03c";
}

.icon-video-camera:before {
	content: "\f03d";
}

.icon-photo:before,
.icon-image:before,
.icon-picture-o:before {
	content: "\f03e";
}

.icon-pencil:before {
	content: "\f040";
}

.icon-map-marker:before {
	content: "\f041";
}

.icon-adjust:before {
	content: "\f042";
}

.icon-tint:before {
	content: "\f043";
}

.icon-edit:before,
.icon-pencil-square-o:before {
	content: "\f044";
}

.icon-share-square-o:before {
	content: "\f045";
}

.icon-check-square-o:before {
	content: "\f046";
}

.icon-arrows:before {
	content: "\f047";
}

.icon-step-backward:before {
	content: "\f048";
}

.icon-fast-backward:before {
	content: "\f049";
}

.icon-backward:before {
	content: "\f04a";
}

.icon-play:before {
	content: "\f04b";
}

.icon-pause:before {
	content: "\f04c";
}

.icon-stop:before {
	content: "\f04d";
}

.icon-forward:before {
	content: "\f04e";
}

.icon-fast-forward:before {
	content: "\f050";
}

.icon-step-forward:before {
	content: "\f051";
}

.icon-eject:before {
	content: "\f052";
}

.icon-chevron-left:before {
	content: "\f053";
}

.icon-chevron-right:before {
	content: "\f054";
}

.icon-plus-circle:before {
	content: "\f055";
}

.icon-minus-circle:before {
	content: "\f056";
}

.icon-times-circle:before {
	content: "\f057";
}

.icon-check-circle:before {
	content: "\f058";
}

.icon-question-circle:before {
	content: "\f059";
}

.icon-info-circle:before {
	content: "\f05a";
}

.icon-crosshairs:before {
	content: "\f05b";
}

.icon-times-circle-o:before {
	content: "\f05c";
}

.icon-check-circle-o:before {
	content: "\f05d";
}

.icon-ban:before {
	content: "\f05e";
}

.icon-arrow-left:before {
	content: "\f060";
}

.icon-arrow-right:before {
	content: "\f061";
}

.icon-arrow-up:before {
	content: "\f062";
}

.icon-arrow-down:before {
	content: "\f063";
}

.icon-mail-forward:before,
.icon-share:before {
	content: "\f064";
}

.icon-expand:before {
	content: "\f065";
}

.icon-compress:before {
	content: "\f066";
}

.icon-plus:before {
	content: "\f067";
}

.icon-minus:before {
	content: "\f068";
}

.icon-asterisk:before {
	content: "\f069";
}

.icon-exclamation-circle:before {
	content: "\f06a";
}

.icon-gift:before {
	content: "\f06b";
}

.icon-leaf:before {
	content: "\f06c";
}

.icon-fire:before {
	content: "\f06d";
}

.icon-eye:before {
	content: "\f06e";
}

.icon-eye-slash:before {
	content: "\f070";
}

.icon-warning:before,
.icon-exclamation-triangle:before {
	content: "\f071";
}

.icon-plane:before {
	content: "\f072";
}

.icon-calendar:before {
	content: "\f073";
}

.icon-random:before {
	content: "\f074";
}

.icon-comment:before {
	content: "\f075";
}

.icon-magnet:before {
	content: "\f076";
}

.icon-chevron-up:before {
	content: "\f077";
}

.icon-chevron-down:before {
	content: "\f078";
}

.icon-retweet:before {
	content: "\f079";
}

.icon-shopping-cart:before {
	content: "\f07a";
}

.icon-folder:before {
	content: "\f07b";
}

.icon-folder-open:before {
	content: "\f07c";
}

.icon-arrows-v:before {
	content: "\f07d";
}

.icon-arrows-h:before {
	content: "\f07e";
}

.icon-bar-chart-o:before {
	content: "\f080";
}

.icon-twitter-square:before {
	content: "\f081";
}

.icon-facebook-square:before {
	content: "\f082";
}

.icon-camera-retro:before {
	content: "\f083";
}

.icon-key:before {
	content: "\f084";
}

.icon-gears:before,
.icon-cogs:before {
	content: "\f085";
}

.icon-comments:before {
	content: "\f086";
}

.icon-thumbs-o-up:before {
	content: "\f087";
}

.icon-thumbs-o-down:before {
	content: "\f088";
}

.icon-star-half:before {
	content: "\f089";
}

.icon-heart-o:before {
	content: "\f08a";
}

.icon-sign-out:before {
	content: "\f08b";
}

.icon-linkedin-square:before {
	content: "\f08c";
}

.icon-thumb-tack:before {
	content: "\f08d";
}

.icon-external-link:before {
	content: "\f08e";
}

.icon-sign-in:before {
	content: "\f090";
}

.icon-trophy:before {
	content: "\f091";
}

.icon-github-square:before {
	content: "\f092";
}

.icon-upload:before {
	content: "\f093";
}

.icon-lemon-o:before {
	content: "\f094";
}

.icon-phone:before {
	content: "\f095";
}

.icon-square-o:before {
	content: "\f096";
}

.icon-bookmark-o:before {
	content: "\f097";
}

.icon-phone-square:before {
	content: "\f098";
}

.icon-twitter:before {
	content: "\f099";
}

.icon-facebook:before {
	content: "\f09a";
}

.icon-github:before {
	content: "\f09b";
}

.icon-unlock:before {
	content: "\f09c";
}

.icon-credit-card:before {
	content: "\f09d";
}

.icon-rss:before {
	content: "\f09e";
}

.icon-hdd-o:before {
	content: "\f0a0";
}

.icon-bullhorn:before {
	content: "\f0a1";
}

.icon-bell:before {
	content: "\f0f3";
}

.icon-certificate:before {
	content: "\f0a3";
}

.icon-hand-o-right:before {
	content: "\f0a4";
}

.icon-hand-o-left:before {
	content: "\f0a5";
}

.icon-hand-o-up:before {
	content: "\f0a6";
}

.icon-hand-o-down:before {
	content: "\f0a7";
}

.icon-arrow-circle-left:before {
	content: "\f0a8";
}

.icon-arrow-circle-right:before {
	content: "\f0a9";
}

.icon-arrow-circle-up:before {
	content: "\f0aa";
}

.icon-arrow-circle-down:before {
	content: "\f0ab";
}

.icon-globe:before {
	content: "\f0ac";
}

.icon-wrench:before {
	content: "\f0ad";
}

.icon-tasks:before {
	content: "\f0ae";
}

.icon-filter:before {
	content: "\f0b0";
}

.icon-briefcase:before {
	content: "\f0b1";
}

.icon-arrows-alt:before {
	content: "\f0b2";
}

.icon-group:before,
.icon-users:before {
	content: "\f0c0";
}

.icon-chain:before,
.icon-link:before {
	content: "\f0c1";
}

.icon-cloud:before {
	content: "\f0c2";
}

.icon-flask:before {
	content: "\f0c3";
}

.icon-cut:before,
.icon-scissors:before {
	content: "\f0c4";
}

.icon-copy:before,
.icon-files-o:before {
	content: "\f0c5";
}

.icon-paperclip:before {
	content: "\f0c6";
}

.icon-save:before,
.icon-floppy-o:before {
	content: "\f0c7";
}

.icon-square:before {
	content: "\f0c8";
}

.icon-navicon:before,
.icon-reorder:before,
.icon-bars:before {
	content: "\f0c9";
}

.icon-list-ul:before {
	content: "\f0ca";
}

.icon-list-ol:before {
	content: "\f0cb";
}

.icon-strikethrough:before {
	content: "\f0cc";
}

.icon-underline:before {
	content: "\f0cd";
}

.icon-table:before {
	content: "\f0ce";
}

.icon-magic:before {
	content: "\f0d0";
}

.icon-truck:before {
	content: "\f0d1";
}

.icon-pinterest:before {
	content: "\f0d2";
}

.icon-pinterest-square:before {
	content: "\f0d3";
}

.icon-google-plus-square:before {
	content: "\f0d4";
}

.icon-google-plus:before {
	content: "\f0d5";
}

.icon-money:before {
	content: "\f0d6";
}

.icon-caret-down:before {
	content: "\f0d7";
}

.icon-caret-up:before {
	content: "\f0d8";
}

.icon-caret-left:before {
	content: "\f0d9";
}

.icon-caret-right:before {
	content: "\f0da";
}

.icon-columns:before {
	content: "\f0db";
}

.icon-unsorted:before,
.icon-sort:before {
	content: "\f0dc";
}

.icon-sort-down:before,
.icon-sort-desc:before {
	content: "\f0dd";
}

.icon-sort-up:before,
.icon-sort-asc:before {
	content: "\f0de";
}

.icon-envelope:before {
	content: "\f0e0";
}

.icon-linkedin:before {
	content: "\f0e1";
}

.icon-rotate-left:before,
.icon-undo:before {
	content: "\f0e2";
}

.icon-legal:before,
.icon-gavel:before {
	content: "\f0e3";
}

.icon-dashboard:before,
.icon-tachometer:before {
	content: "\f0e4";
}

.icon-comment-o:before {
	content: "\f0e5";
}

.icon-comments-o:before {
	content: "\f0e6";
}

.icon-flash:before,
.icon-bolt:before {
	content: "\f0e7";
}

.icon-sitemap:before {
	content: "\f0e8";
}

.icon-umbrella:before {
	content: "\f0e9";
}

.icon-paste:before,
.icon-clipboard:before {
	content: "\f0ea";
}

.icon-lightbulb-o:before {
	content: "\f0eb";
}

.icon-exchange:before {
	content: "\f0ec";
}

.icon-cloud-download:before {
	content: "\f0ed";
}

.icon-cloud-upload:before {
	content: "\f0ee";
}

.icon-user-md:before {
	content: "\f0f0";
}

.icon-stethoscope:before {
	content: "\f0f1";
}

.icon-suitcase:before {
	content: "\f0f2";
}

.icon-bell-o:before {
	content: "\f0a2";
}

.icon-coffee:before {
	content: "\f0f4";
}

.icon-cutlery:before {
	content: "\f0f5";
}

.icon-file-text-o:before {
	content: "\f0f6";
}

.icon-building-o:before {
	content: "\f0f7";
}

.icon-hospital-o:before {
	content: "\f0f8";
}

.icon-ambulance:before {
	content: "\f0f9";
}

.icon-medkit:before {
	content: "\f0fa";
}

.icon-fighter-jet:before {
	content: "\f0fb";
}

.icon-beer:before {
	content: "\f0fc";
}

.icon-h-square:before {
	content: "\f0fd";
}

.icon-plus-square:before {
	content: "\f0fe";
}

.icon-angle-double-left:before {
	content: "\f100";
}

.icon-angle-double-right:before {
	content: "\f101";
}

.icon-angle-double-up:before {
	content: "\f102";
}

.icon-angle-double-down:before {
	content: "\f103";
}

.icon-angle-left:before {
	content: "\f104";
}

.icon-angle-right:before {
	content: "\f105";
}

.icon-angle-up:before {
	content: "\f106";
}

.icon-angle-down:before {
	content: "\f107";
}

.icon-desktop:before {
	content: "\f108";
}

.icon-laptop:before {
	content: "\f109";
}

.icon-tablet:before {
	content: "\f10a";
}

.icon-mobile-phone:before,
.icon-mobile:before {
	content: "\f10b";
}

.icon-circle-o:before {
	content: "\f10c";
}

.icon-quote-left:before {
	content: "\f10d";
}

.icon-quote-right:before {
	content: "\f10e";
}

.icon-spinner:before {
	content: "\f110";
}

.icon-circle:before {
	content: "\f111";
}

.icon-mail-reply:before,
.icon-reply:before {
	content: "\f112";
}

.icon-github-alt:before {
	content: "\f113";
}

.icon-folder-o:before {
	content: "\f114";
}

.icon-folder-open-o:before {
	content: "\f115";
}

.icon-smile-o:before {
	content: "\f118";
}

.icon-frown-o:before {
	content: "\f119";
}

.icon-meh-o:before {
	content: "\f11a";
}

.icon-gamepad:before {
	content: "\f11b";
}

.icon-keyboard-o:before {
	content: "\f11c";
}

.icon-flag-o:before {
	content: "\f11d";
}

.icon-flag-checkered:before {
	content: "\f11e";
}

.icon-terminal:before {
	content: "\f120";
}

.icon-code:before {
	content: "\f121";
}

.icon-mail-reply-all:before,
.icon-reply-all:before {
	content: "\f122";
}

.icon-star-half-empty:before,
.icon-star-half-full:before,
.icon-star-half-o:before {
	content: "\f123";
}

.icon-location-arrow:before {
	content: "\f124";
}

.icon-crop:before {
	content: "\f125";
}

.icon-code-fork:before {
	content: "\f126";
}

.icon-unlink:before,
.icon-chain-broken:before {
	content: "\f127";
}

.icon-question:before {
	content: "\f128";
}

.icon-info:before {
	content: "\f129";
}

.icon-exclamation:before {
	content: "\f12a";
}

.icon-superscript:before {
	content: "\f12b";
}

.icon-subscript:before {
	content: "\f12c";
}

.icon-eraser:before {
	content: "\f12d";
}

.icon-puzzle-piece:before {
	content: "\f12e";
}

.icon-microphone:before {
	content: "\f130";
}

.icon-microphone-slash:before {
	content: "\f131";
}

.icon-shield:before {
	content: "\f132";
}

.icon-calendar-o:before {
	content: "\f133";
}

.icon-fire-extinguisher:before {
	content: "\f134";
}

.icon-rocket:before {
	content: "\f135";
}

.icon-maxcdn:before {
	content: "\f136";
}

.icon-chevron-circle-left:before {
	content: "\f137";
}

.icon-chevron-circle-right:before {
	content: "\f138";
}

.icon-chevron-circle-up:before {
	content: "\f139";
}

.icon-chevron-circle-down:before {
	content: "\f13a";
}

.icon-html5:before {
	content: "\f13b";
}

.icon-css3:before {
	content: "\f13c";
}

.icon-anchor:before {
	content: "\f13d";
}

.icon-unlock-alt:before {
	content: "\f13e";
}

.icon-bullseye:before {
	content: "\f140";
}

.icon-ellipsis-h:before {
	content: "\f141";
}

.icon-ellipsis-v:before {
	content: "\f142";
}

.icon-rss-square:before {
	content: "\f143";
}

.icon-play-circle:before {
	content: "\f144";
}

.icon-ticket:before {
	content: "\f145";
}

.icon-minus-square:before {
	content: "\f146";
}

.icon-minus-square-o:before {
	content: "\f147";
}

.icon-level-up:before {
	content: "\f148";
}

.icon-level-down:before {
	content: "\f149";
}

.icon-check-square:before {
	content: "\f14a";
}

.icon-pencil-square:before {
	content: "\f14b";
}

.icon-external-link-square:before {
	content: "\f14c";
}

.icon-share-square:before {
	content: "\f14d";
}

.icon-compass:before {
	content: "\f14e";
}

.icon-toggle-down:before,
.icon-caret-square-o-down:before {
	content: "\f150";
}

.icon-toggle-up:before,
.icon-caret-square-o-up:before {
	content: "\f151";
}

.icon-toggle-right:before,
.icon-caret-square-o-right:before {
	content: "\f152";
}

.icon-euro:before,
.icon-eur:before {
	content: "\f153";
}

.icon-gbp:before {
	content: "\f154";
}

.icon-dollar:before,
.icon-usd:before {
	content: "\f155";
}

.icon-rupee:before,
.icon-inr:before {
	content: "\f156";
}

.icon-cny:before,
.icon-rmb:before,
.icon-yen:before,
.icon-jpy:before {
	content: "\f157";
}

.icon-ruble:before,
.icon-rouble:before,
.icon-rub:before {
	content: "\f158";
}

.icon-won:before,
.icon-krw:before {
	content: "\f159";
}

.icon-bitcoin:before,
.icon-btc:before {
	content: "\f15a";
}

.icon-file:before {
	content: "\f15b";
}

.icon-file-text:before {
	content: "\f15c";
}

.icon-sort-alpha-asc:before {
	content: "\f15d";
}

.icon-sort-alpha-desc:before {
	content: "\f15e";
}

.icon-sort-amount-asc:before {
	content: "\f160";
}

.icon-sort-amount-desc:before {
	content: "\f161";
}

.icon-sort-numeric-asc:before {
	content: "\f162";
}

.icon-sort-numeric-desc:before {
	content: "\f163";
}

.icon-thumbs-up:before {
	content: "\f164";
}

.icon-thumbs-down:before {
	content: "\f165";
}

.icon-youtube-square:before {
	content: "\f166";
}

.icon-youtube:before {
	content: "\f167";
}

.icon-xing:before {
	content: "\f168";
}

.icon-xing-square:before {
	content: "\f169";
}

.icon-youtube-play:before {
	content: "\f16a";
}

.icon-dropbox:before {
	content: "\f16b";
}

.icon-stack-overflow:before {
	content: "\f16c";
}

.icon-instagram:before {
	content: "\f16d";
}

.icon-flickr:before {
	content: "\f16e";
}

.icon-adn:before {
	content: "\f170";
}

.icon-bitbucket:before {
	content: "\f171";
}

.icon-bitbucket-square:before {
	content: "\f172";
}

.icon-tumblr:before {
	content: "\f173";
}

.icon-tumblr-square:before {
	content: "\f174";
}

.icon-long-arrow-down:before {
	content: "\f175";
}

.icon-long-arrow-up:before {
	content: "\f176";
}

.icon-long-arrow-left:before {
	content: "\f177";
}

.icon-long-arrow-right:before {
	content: "\f178";
}

.icon-apple:before {
	content: "\f179";
}

.icon-windows:before {
	content: "\f17a";
}

.icon-android:before {
	content: "\f17b";
}

.icon-linux:before {
	content: "\f17c";
}

.icon-dribbble:before {
	content: "\f17d";
}

.icon-skype:before {
	content: "\f17e";
}

.icon-foursquare:before {
	content: "\f180";
}

.icon-trello:before {
	content: "\f181";
}

.icon-female:before {
	content: "\f182";
}

.icon-male:before {
	content: "\f183";
}

.icon-gittip:before {
	content: "\f184";
}

.icon-sun-o:before {
	content: "\f185";
}

.icon-moon-o:before {
	content: "\f186";
}

.icon-archive:before {
	content: "\f187";
}

.icon-bug:before {
	content: "\f188";
}

.icon-vk:before {
	content: "\f189";
}

.icon-weibo:before {
	content: "\f18a";
}

.icon-renren:before {
	content: "\f18b";
}

.icon-pagelines:before {
	content: "\f18c";
}

.icon-stack-exchange:before {
	content: "\f18d";
}

.icon-arrow-circle-o-right:before {
	content: "\f18e";
}

.icon-arrow-circle-o-left:before {
	content: "\f190";
}

.icon-toggle-left:before,
.icon-caret-square-o-left:before {
	content: "\f191";
}

.icon-dot-circle-o:before {
	content: "\f192";
}

.icon-wheelchair:before {
	content: "\f193";
}

.icon-vimeo-square:before {
	content: "\f194";
}

.icon-turkish-lira:before,
.icon-try:before {
	content: "\f195";
}

.icon-plus-square-o:before {
	content: "\f196";
}

.icon-space-shuttle:before {
	content: "\f197";
}

.icon-slack:before {
	content: "\f198";
}

.icon-envelope-square:before {
	content: "\f199";
}

.icon-wordpress:before {
	content: "\f19a";
}

.icon-openid:before {
	content: "\f19b";
}

.icon-institution:before,
.icon-bank:before,
.icon-university:before {
	content: "\f19c";
}

.icon-mortar-board:before,
.icon-graduation-cap:before {
	content: "\f19d";
}

.icon-yahoo:before {
	content: "\f19e";
}

.icon-google:before {
	content: "\f1a0";
}

.icon-reddit:before {
	content: "\f1a1";
}

.icon-reddit-square:before {
	content: "\f1a2";
}

.icon-stumbleupon-circle:before {
	content: "\f1a3";
}

.icon-stumbleupon:before {
	content: "\f1a4";
}

.icon-delicious:before {
	content: "\f1a5";
}

.icon-digg:before {
	content: "\f1a6";
}

.icon-pied-piper-square:before,
.icon-pied-piper:before {
	content: "\f1a7";
}

.icon-pied-piper-alt:before {
	content: "\f1a8";
}

.icon-drupal:before {
	content: "\f1a9";
}

.icon-joomla:before {
	content: "\f1aa";
}

.icon-language:before {
	content: "\f1ab";
}

.icon-fax:before {
	content: "\f1ac";
}

.icon-building:before {
	content: "\f1ad";
}

.icon-child:before {
	content: "\f1ae";
}

.icon-paw:before {
	content: "\f1b0";
}

.icon-spoon:before {
	content: "\f1b1";
}

.icon-cube:before {
	content: "\f1b2";
}

.icon-cubes:before {
	content: "\f1b3";
}

.icon-behance:before {
	content: "\f1b4";
}

.icon-behance-square:before {
	content: "\f1b5";
}

.icon-steam:before {
	content: "\f1b6";
}

.icon-steam-square:before {
	content: "\f1b7";
}

.icon-recycle:before {
	content: "\f1b8";
}

.icon-automobile:before,
.icon-car:before {
	content: "\f1b9";
}

.icon-cab:before,
.icon-taxi:before {
	content: "\f1ba";
}

.icon-tree:before {
	content: "\f1bb";
}

.icon-spotify:before {
	content: "\f1bc";
}

.icon-deviantart:before {
	content: "\f1bd";
}

.icon-soundcloud:before {
	content: "\f1be";
}

.icon-database:before {
	content: "\f1c0";
}

.icon-file-pdf-o:before {
	content: "\f1c1";
}

.icon-file-word-o:before {
	content: "\f1c2";
}

.icon-file-excel-o:before {
	content: "\f1c3";
}

.icon-file-powerpoint-o:before {
	content: "\f1c4";
}

.icon-file-photo-o:before,
.icon-file-picture-o:before,
.icon-file-image-o:before {
	content: "\f1c5";
}

.icon-file-zip-o:before,
.icon-file-archive-o:before {
	content: "\f1c6";
}

.icon-file-sound-o:before,
.icon-file-audio-o:before {
	content: "\f1c7";
}

.icon-file-movie-o:before,
.icon-file-video-o:before {
	content: "\f1c8";
}

.icon-file-code-o:before {
	content: "\f1c9";
}

.icon-vine:before {
	content: "\f1ca";
}

.icon-codepen:before {
	content: "\f1cb";
}

.icon-jsfiddle:before {
	content: "\f1cc";
}

.icon-life-bouy:before,
.icon-life-saver:before,
.icon-support:before,
.icon-life-ring:before {
	content: "\f1cd";
}

.icon-circle-o-notch:before {
	content: "\f1ce";
}

.icon-ra:before,
.icon-rebel:before {
	content: "\f1d0";
}

.icon-ge:before,
.icon-empire:before {
	content: "\f1d1";
}

.icon-git-square:before {
	content: "\f1d2";
}

.icon-git:before {
	content: "\f1d3";
}

.icon-hacker-news:before {
	content: "\f1d4";
}

.icon-tencent-weibo:before {
	content: "\f1d5";
}

.icon-qq:before {
	content: "\f1d6";
}

.icon-wechat:before,
.icon-weixin:before {
	content: "\f1d7";
}

.icon-send:before,
.icon-paper-plane:before {
	content: "\f1d8";
}

.icon-send-o:before,
.icon-paper-plane-o:before {
	content: "\f1d9";
}

.icon-history:before {
	content: "\f1da";
}

.icon-circle-thin:before {
	content: "\f1db";
}

.icon-header:before {
	content: "\f1dc";
}

.icon-paragraph:before {
	content: "\f1dd";
}

.icon-sliders:before {
	content: "\f1de";
}

.icon-share-alt:before {
	content: "\f1e0";
}

.icon-share-alt-square:before {
	content: "\f1e1";
}

.icon-bomb:before {
	content: "\f1e2";
}

.close {
	display: inline-block;
	font-size: 24px;
	cursor: pointer;
	line-height: 24px;
}

.close:before {
	content: "\00d7";
}

.leftward {
	display: inline-block;
	width: 0;
	height: 0;
	margin-left: 2px;
	vertical-align: middle;
	border-right: 4px solid;
	border-top: 4px solid transparent;
	border-bottom: 4px solid transparent;
}

.rightward {
	display: inline-block;
	width: 0;
	height: 0;
	margin-left: 2px;
	vertical-align: middle;
	border-left: 4px solid;
	border-top: 4px solid transparent;
	border-bottom: 4px solid transparent;
}

.upward {
	display: inline-block;
	width: 0;
	height: 0;
	margin-left: 2px;
	vertical-align: middle;
	border-bottom: 4px solid;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}

.downward,
.arrow {
	display: inline-block;
	width: 0;
	height: 0;
	margin-left: 2px;
	vertical-align: middle;
	border-top: 4px solid;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}


/*标签*/

.tag {
	font-size: 75%;
	border-radius: 0.25em;
	background: #999;
	padding: 0.1em 0.5em 0.2em;
	color: #fff;
}

.tag.bg-back,
.tag.bg-mix,
.tag.bg-white,
.tag.bg-red-light,
.tag.bg-yellow-light,
.tag.bg-blue-light,
.tag.bg-green-light {
	color: inherit;
}


/*徽章*/

.badge {
	display: inline-block;
	min-width: 10px;
	padding: 3px 7px;
	font-size: 12px;
	line-height: 1;
	color: #fff;
	text-align: center;
	white-space: nowrap;
	vertical-align: baseline;
	background-color: #999;
	border-radius: 2em;
}

.badge:empty {
	display: none
}

.badge.bg-back,
.badge.bg-mix {
	color: inherit;
}

.badge.bg-white,
.badge.bg-red-light,
.badge.bg-yellow-light,
.badge.bg-blue-light,
.badge.bg-green-light {
	color: #333;
}

.badge-corner {
	position: relative;
}

.badge-corner .badge {
	position: absolute;
	right: -10px;
	top: -9px;
	font-weight: normal;
	cursor: pointer;
}


/*进度条*/

.progress {
	height: 14px;
	overflow: hidden;
	background-color: #f5f5f5;
	border-radius: 7px;
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

.progress-bar {
	color: #fff;
	float: left;
	background-color: #0a0;
	display: inline-block;
	font-size: 12px;
	line-height: 14px;
	text-align: center;
}

.progress-bar:after {
	content: "\3000";
}

.progress .progress-bar:last-child {
	border-radius: 0 7px 7px 0;
}

.progress-big {
	height: 26px;
	border-radius: 13px;
}

.progress-big .progress-bar {
	font-size: 14px;
	line-height: 26px;
}

.progress-big .progress-bar:last-child {
	border-radius: 0 13px 13px 0;
}

.progress-small {
	height: 6px;
	border-radius: 3px;
}

.progress-small .progress-bar {
	font-size: 6px;
	line-height: 6px;
}

.progress-small .progress-bar:last-child {
	border-radius: 0 3px 3px 0;
}

.progress-bar.bg-back,
.progress-bar.bg-mix,
.progress-bar.bg-white {
	color: inherit;
}

@-webkit-keyframes progress-bar-active {
	from {
		background-position: 30px 0;
	}
	to {
		background-position: 0 0;
	}
}

@keyframes progress-bar-active {
	from {
		background-position: 30px 0;
	}
	to {
		background-position: 0 0;
	}
}

.progress-striped .progress-bar {
	background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .25) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .25) 50%, rgba(255, 255, 255, .25) 75%, transparent 75%, transparent);
	background-image: linear-gradient(45deg, rgba(255, 255, 255, .25) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .25) 50%, rgba(255, 255, 255, .25) 75%, transparent 75%, transparent);
	background-size: 30px 30px;
}

.progress.active .progress-bar {
	-webkit-animation: progress-bar-active 2s linear infinite normal;
	animation: progress-bar-active 2s linear infinite normal;
}


/*范围*/

.range {
	position: raelative;
	height: 10px;
	background-color: #f5f5f5;
	border-radius: 5px;
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

.range-scroll {
	position: aabsolute;
	width: 16px;
	height: 16px;
	margin-top: -3px;
	border-radius: 8px;
	cursor: pointer;
	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .175);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, .175);
}

.range-bar {
	position: absaolute;
	height: 10px;
	float: left;
	display: inline-block;
	border-radius: 5px;
}

.range-bar span {
	position: relative;
}

.range-scroll-left {
	float: left;
	margin-left: -8px;
}

.range-scroll-right {
	float: right;
	margin-right: -8px;
}

.range-group {
	display: table;
}

.range-group .range-area,
.range-group input {
	display: table-cell;
}

.range-group .range-area {
	width: 100%;
}

.range-group input {
	width: 1%;
}


/*下拉菜单*/

.drop {
	position: relative;
}

.drop-menu {
	position: absolute;
	display: none;
	top: 100%;
	left: 0;
	z-index: 1;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 1px 0 0;
	list-style: none;
	background-color: #fff;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0, 0, 0, .15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
	box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}

.drop-menu.pull-right {
	right: 0;
	left: auto;
}

.drop-menu a {
	color: #333;
	padding: 5px 20px;
	display: block;
	clear: both;
	white-space: nowrap;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.drop-menu a:hover,
.drop-menu a:focus {
	background: #f5f5f5;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.drop-menu .disabled a {
	color: #999;
	pointer-events: none;
}

.drop-menu .disabled a:hover,
.drop-menu .disabled a:focus {
	cursor: not-allowed;
}

.drop-menu .divider {
	background-color: #ddd;
	height: 1px;
	overflow: hidden;
	margin: 8px 0;
}

.drop-menu .drop-meun-head {
	display: block;
	padding: 5px 20px;
	font-size: 12px;
	color: #999;
}

.open .drop-menu {
	display: block;
}


/*按钮组*/

.button-group,
.button-group-y {
	display: inline-block;
	position: relative;
	vertical-align: middle;
}

.button-group .button,
.button-group .button-group {
	float: left;
	position: relative;
	font-weight: normal;
}

.button-group :not(:first-child):not(:last-child):not(.dropdown-toggle):not(.dropdown-hover).button,
.button-group .button-group .button {
	border-radius: 0;
}

.button-group .button,
.button-group .button-group .button {
	margin-left: -1px;
}

.button-group :first-child:not(:last-child).button:not(.dropdown-toggle):not(.dropdown-hover) {
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
}

.button-group :last-child:not(:first-child).button:not(.dropdown-toggle):not(.dropdown-hover) {
	border-bottom-left-radius: 0px;
	border-top-left-radius: 0px;
}

.button-group .button-group:first-child .button:last-child,
.button-group .button-group:first-child .dropdown-toggle {
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
}

.button-group .button-group:last-child .button:first-child {
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
}

.button-group :not(:first-child).dropdown-toggle {
	border-bottom-left-radius: 0px;
	border-top-left-radius: 0px;
	padding: 6px;
}

.button-toolbar {
	display: inline-block;
}

.button-toolbar .button-group {
	display: inline-block;
}

.button-group-y .button,
.button-group-y .button-group {
	float: none;
	clear: both;
	display: block;
	width: 100%;
	font-weight: normal;
}

.button-group-y :not(:first-child):not(:last-child):not(.dropdown-toggle).button,
.button-group-y .button-group .button {
	border-radius: 0;
}

.button-group-y .button,
.button-group-y .button-group-y .button,
.button-group-y .button-group .button {
	margin-left: 0;
	margin-top: -1px;
}

.button-group-y :first-child:not(:last-child).button:not(.dropdown-toggle) {
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;
}

.button-group-y :last-child:not(:first-child).button:not(.dropdown-toggle) {
	border-top-right-radius: 0px;
	border-top-left-radius: 0px;
}

.button-group-y .button-group:first-child .button:last-child,
.button-group-y .button-group:first-child .dropdown-toggle {
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}

.button-group-y .button-group:last-child .button:first-child {
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

.button-group-justified {
	display: table;
	width: 100%;
	table-layout: fixed;
	border-collapse: separate;
	text-align: center;
}

.button-group-justified > .button,
.button-group-justified > .button-group {
	display: table-cell;
	float: none;
	width: 1%;
}

.button-group-justified > .button-group .button {
	width: 100%;
	margin: 0;
}

.button-group-justified .drop-menu {
	text-align: left;
}

.button-group-large .button {
	padding: 15px 20px;
	font-size: 24px;
	line-height: 24px;
	font-weight: bold;
}

.button-group-big .button {
	padding: 10px 15px;
	font-size: 18px;
	line-height: 22px;
}

.button-group-small .button {
	padding: 5px 10px;
	font-size: 12px;
	font-weight: normal;
	line-height: 18px;
}

.button-group-little .button {
	padding: 3px 5px;
	font-size: 12px;
	font-weight: normal;
	line-height: 16px;
}


/*单选多选*/

.button-group label input {
	position: absolute;
	filter: alpha(opacity=0);
	opacity: 0;
	z-index: -1;
}

.border-red .button.active,
.border-yellow .button.active,
.border-blue .button.active,
.border-green .button.active,
.border-main .button.active,
.border-sub .button.active,
.border-dot .button.active,
.border-black .button.active,
.border-gray .button.active {
	color: #fff;
}


/*按钮下拉*/

.dropup .drop-menu {
	top: auto;
	bottom: 100%;
	margin-bottom: 1px;
}


/*选择*/

.selected-inline li {
	position: relative;
	display: inline-block;
	width: auto;
	border: solid 1px #ddd;
	border-radius: 4px;
	margin-right: 5px;
	padding: 3px 9px;
	cursor: pointer;
}

.selected-inline .selected {
	border: solid 2px #f60;
	padding: 2px 8px;
}


/*文字色块*/

.txt {
	display: inline-block;
	width: 48px;
	height: 48px;
	line-height: 48px;
	text-align: center;
	background-color: #f5f5f5;
}

.txt-border {
	display: inline-block;
	width: 48px;
	height: 48px;
	line-height: 48px;
	border: solid 1px #ddd;
	padding: 3px;
	vertical-align: bottom;
}

.txt-border .txt {
	display: block;
	width: 100%;
	height: 100%;
	line-height: 40px;
}

.txt.bg-main,
.txt.bg-sub,
.txt.bg-dot,
.txt.bg-black,
.txt.bg-gray,
.txt.bg-red,
.txt.bg-yellow,
.txt.bg-blue,
.txt.bg-green {
	color: #fff;
}

.txt .bg-main,
.txt .bg-sub,
.txt .bg-dot,
.txt .bg-black,
.txt .bg-gray,
.txt .bg-red,
.txt .bg-yellow,
.txt .bg-blue,
.txt .bg-green {
	color: #fff;
}

.txt span {
	font-size: 12px;
}

.txt-border.txt-large {
	padding: 5px;
}

.txt-large {
	width: 128px;
	height: 128px;
	line-height: 128px;
	font-size: 36px;
}

.txt-large .txt {
	width: 116px;
	height: 116px;
	line-height: 116px;
}

.txt-large strong {
	font-size: 80px;
	font-weight: normal;
}

.txt-border.txt-big {
	padding: 4px;
}

.txt-big {
	width: 64px;
	height: 64px;
	line-height: 64px;
	font-size: 20px;
}

.txt-big .txt {
	width: 54px;
	height: 54px;
	line-height: 54px;
}

.txt-big strong {
	font-size: 36px;
	font-weight: normal;
}

.txt-border.txt-small {
	padding: 2px;
}

.txt-small {
	width: 32px;
	height: 32px;
	line-height: 32px;
}

.txt-small .txt {
	width: 26px;
	height: 26px;
	line-height: 26px;
}

.txt-border.txt-little {
	padding: 1px;
}

.txt-little {
	width: 16px;
	height: 16px;
	line-height: 16px;
	font-size: 12px;
}

.txt-little .txt {
	width: 12px;
	height: 12px;
	line-height: 12px;
	font-size: 12px;
}


/*媒体*/

.media,
.media-body {
	overflow: hidden;
	zoom: 1;
}

.media,
.media .media {
	margin-top: 15px;
}

.media:first-child {
	margin-top: 0;
}

.media-body {
	margin-top: 3px;
}

.media strong {
	display: block;
}

.media p {
	margin: 5px 0 0 0;
	text-align: justify;
	line-height: 18px;
}

.media.media-y {
	text-align: center;
}

.media.media-x .media-body {
	margin: 0;
}

.media.media-x .float-left {
	margin-right: 10px;
}

.media.media-x .float-right {
	margin-left: 10px;
}

.media.media-x strong {
	margin-bottom: 5px;
}

.media-inline .media {
	display: inline-block;
	margin-right: 15px;
	margin-top: 0;
}

.media-inline .media:last-child {
	margin-right: 0;
}


/*表单*/

.input {
	font-size: 14px;
	padding: 6px;
	border: solid 1px #ddd;
	width: 100%;
	height: 34px;
	line-height: 20px;
	display: block;
	border-radius: 4px;
	-webkit-appearance: none;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.label {
	padding-bottom: 7px;
	display: block;
	line-height: 20px;
}

.label label {
	font-weight: bold;
}

.input-file {
	display: inline-block;
	position: relative;
	overflow: hidden;
	text-align: center;
	width: auto;
	color: #333;
}

.input-file input[type="file"] {
	position: absolute;
	top: 0;
	right: 0;
	font-size: 14px;
	background-color: #fff;
	transform: translate(-300px, 0px) scale(4);
	height: 40px;
	opacity: 0;
	filter: alpha(opacity=0);
}

.input:focus {
	border-color: #09c;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.input-auto {
	width: auto;
	display: inline-block;
}

input[disabled],
input[readonly],
textarea[disabled],
textarea[readonly],
select[disabled],
select[readonly] {
	cursor: not-allowed;
	background: #eee;
}


/*IE6无效*/

textarea.input {
	height: auto;
}

.input-note,
.label .float-right {
	color: #999;
	font-size: 12px;
	padding-top: 2px;
	line-height: 18px;
}

.field {
	position: relative;
}

.form-group {
	padding-bottom: 10px;
}

.field-icon .input {
	text-indent: 25px;
}

.field-icon .icon {
	position: absolute;
	left: 0;
	right: auto;
	width: 34px;
	height: 34px;
	text-align: center;
	line-height: 34px;
	font-size: 16px;
	font-weight: normal;
}

.field-icon-right .icon {
	position: absolute;
	right: 0;
	top: 0;
	width: 34px;
	height: 34px;
	text-align: center;
	line-height: 34px;
	font-size: 16px;
	font-weight: normal;
}


/*横向排列form-x*/

.form-x .form-group:after,
.form-inline:after {
	clear: both;
	content: " ";
	display: block;
	height: 0;
	overflow: hidden;
	visibility: hidden;
}

@media (min-width: 760px) {
	.form-x .form-group .label {
		float: left;
		width: 15%;
		text-align: right;
		padding: 7px 7px 7px 0;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	.form-x .form-group .field {
		float: left;
		width: 85%;
	}
	.form-x .form-button {
		margin-left: 15%;
	}
}

@media (min-width: 760px) {
	.form-inline {
		display: inline-block;
	}
	.form-inline .input {
		width: auto;
		display: inline-block;
	}
	.form-inline .form-group {
		display: inline-table;
		padding-bottom: 0;
		vertical-align: middle;
	}
	.form-inline .form-group .input-group {
		display: inline-table;
		width: auto;
		vertical-align: middle;
	}
	.form-inline .form-group .input-group .input {
		width: auto;
	}
	.form-inline .form-group .label {
		display: inline-block;
	}
	.form-inline .form-group .field {
		display: inline-block;
	}
	.form-inline .form-button {
		display: inline-block;
		vertical-align: middle;
	}
	.form-inline .form-button .button {
		width: auto;
	}
	.form-auto .input {
		width: auto;
		display: inline-block;
	}
	.form-auto .input-group {
		display: inline-table;
		width: auto;
		display: inline-block;
	}
	.form-auto .input-group .input {
		width: auto;
		display: inline-block;
	}
	.input-inline {
		padding-left: 1px;
	}
	.input-inline input {
		position: relative;
		float: left;
		border-radius: 0;
		margin-left: -1px;
		width: auto;
	}
	.form-small .input-inline input,
	.form-big .input-inline input {
		border-radius: 0;
	}
	.input-inline input:first-child {
		left: 1px;
		border-radius: 4px 0 0 4px;
	}
	.input-inline input:last-child {
		border-radius: 0 4px 4px 0;
	}
}

.input-block {
	padding-top: 8px;
}

.input-block:first-child {
	padding-top: 1px;
}

.input-block input {
	position: relative;
	margin-top: -1px;
	border-radius: 0;
}

.form-small .input-block input,
.form-big .input-block input {
	border-radius: 0;
}

.input-block input:first-child {
	border-radius: 4px 4px 0 0;
}

.input-block input:last-child {
	border-radius: 0 0 4px 4px;
}

.label-block label {
	display: block;
	line-height: 24px;
}


/*输入框组*/

.input-group {
	border-collapse: separate;
	display: table;
	position: relative;
}

.input-group .addon,
.input-group .addbtn,
.input-group .input {
	display: table-cell;
}

.input-group .addon,
.input-group .addbtn {
	width: 1%;
	white-space: nowrap;
	vertical-align: middle;
}

.input-group .addbtn .button {
	font-weight: normal;
}

.input-group .input {
	width: 100%;
}

.input-group .addon {
	background-color: #f5f5f5;
	border: 1px solid #ddd;
	border-radius: 4px;
	line-height: 1;
	padding: 6px 12px;
	text-align: center;
}

.input-group .addon:first-child,
.input-group .addbtn:first-child .button {
	border-right: 0 none;
}

.input-group .addon:first-child,
.input-group .addbtn:first-child .button,
.input-group .input:first-child {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0;
}

.input-group .addon:last-child,
.input-group .addbtn:last-child .button {
	border-left: 0 none;
}

.input-group .addon:last-child,
.input-group .addbtn:last-child .button,
.input-group .input:last-child {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
}

.input-group .addon:not(:first-child):not(:last-child),
.input-group .addbtn:not(:first-child):not(:last-child) .button,
.input-group .input:not(:first-child):not(:last-child) {
	border-radius: 0;
}


/*验证提示*/

.form-tips .form-group .field {
	position: relative;
	zoom: 1;
}

.form-tips .input-help {
	position: absolute;
	z-index: 1;
	float: left;
	left: 0;
	top: 100%;
}

.form-tips .input-help ul {
	border: solid 1px #ddd;
	background: #fff;
	padding: 10px 10px 10px 25px;
	box-shadow: 0 0 5px #ddd;
	border-radius: 4px;
	width: 160px;
	min-width: 160px;
	width: auto;
	_width: 160px;
}


/*尺寸*/

.input-big,
.form-big .input,
.form-big .button {
	padding: 10px;
	font-size: 16px;
	line-height: 24px;
	height: 46px;
}

.input-small,
.form-small .input,
.form-small .button {
	padding: 5px;
	font-size: 12px;
	line-height: 18px;
	height: 28px;
}

.form-small .addon,
.form-small .addbtn {
	padding: 5px 8px;
	font-size: 12px;
}


/*列表组*/

.list-group,
.list-link {
	border: solid 1px #ddd;
	border-radius: 4px;
	list-style: none;
	padding: 0;
}

.list-group li,
.list-link a {
	padding: 10px 15px;
	display: block;
	border-bottom: solid 1px #ddd;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.list-group li:last-child,
.list-link a:last-child {
	border-bottom: 0 none;
}

.list-striped li:nth-child(odd) {
	background-color: #f5f5f5;
}

.list-link a {
	color: #333;
}

.list-link a:hover {
	background-color: #f5f5f5;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.list-link a.active:link,
.list-link a.active:visited {
	background-color: #f5f5f5;
}


/*面板*/

.panel {
	border: solid 1px #ddd;
	border-radius: 4px;
}

.panel-head {
	background-color: #f5f5f5;
	padding: 10px 15px;
	border-radius: 4px 4px 0 0;
	border-bottom: solid 1px #ddd;
}

.panel-foot {
	background-color: #f5f5f5;
	padding: 10px 15px;
	border-radius: 0 0 4px 4px;
	border-top: solid 1px #ddd;
}

.panel-body {
	padding: 15px;
}

.panel .bg-main,
.panel .bg-sub,
.panel .bg-dot,
.panel .bg-red,
.panel .bg-yellow,
.panel .bg-green {
	color: #fff;
}

.panel .panel-body + .table,
.panel .panel-body + .list-group {
	border-top: solid 1px #ddd;
}

.panel .list-group {
	border: none;
	border-radius: 0;
}


/*面板组*/

.panel-group {
	border-top: solid 1px #ddd;
	border-bottom: solid 1px #ddd;
	border-left: none;
	border-right: none;
	list-style: none;
	padding: 15px;
}


/*选项标签*/

.tab .tab-head strong {
	float: left;
	padding: 8px 20px 0 0;
	line-height: 20px;
}

.tab .tab-more {
	float: right;
	margin: 10px 0 0 10px;
	font-size: 12px;
}

.tab .tab-nav {
	list-style: none;
}

.tab .tab-nav li {
	display: inline-block;
}

.tab .tab-nav li a {
	color: #333;
	padding: 8px 20px;
	display: block;
	border: solid 1px #ddd;
	line-height: 20px;
	border-bottom: none;
	border-radius: 4px 4px 0 0;
}

.tab .tab-nav .active {
	background-color: #fff;
}

.tab .tab-nav .active a {
	cursor: default;
}

.tab .tab-body {
	border-top: solid 1px #ddd;
	margin-top: -1px;
	padding-top: 15px;
}

.tab .tab-body-bordered {
	border: solid 1px #ddd;
	border-radius: 4px;
	padding: 15px;
}

.tab .tab-body .tab-panel {
	display: none;
}

.tab .tab-body .active {
	display: block;
}

.tab.tab-small strong {
	padding-top: 3px;
}

.tab.tab-small .tab-more {
	margin: 5px 0 0 10px;
}

.tab.tab-small li a {
	padding: 3px 10px;
}


/*对话框*/

.dialog-mask {
	position: fixed;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	background: #000;
	z-index: 10;
	filter: alpha(opacity=50);
	opacity: .5;
	display: block;
	overflow-x: hidden;
	overflow-y: auto;
}

.dialog {
	border: 1px solid #ddd;
	box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
	border-radius: 4px;
	background-color: #fff;
	display: none;
}

.dialog .dialog-head,
.dialog .dialog-foot {
	padding: 10px 20px;
}

.dialog .dialog-head {
	border-bottom: solid 1px #ddd;
	background-color: #f5f5f5;
	border-radius: 4px 4px 0 0;
}

.dialog .dialog-head strong {
	font-size: 16px;
}

.dialog .dialog-head .close {
	float: right;
	line-height: 24px;
}

.dialog .dialog-body {
	padding: 15px 20px;
}

.dialog .dialog-foot {
	text-align: right;
	border-top: solid 1px #ddd;
}

.dialog.open {
	display: block;
}


/*提示信息*/

.tip {
	display: inline-block;
	background-color: #f5f5f5;
	border: 1px solid #ddd;
	border-radius: 3px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.tip p {
	margin: 0px;
}

.tip .tip-line {
	margin: 0px;
	padding: 2px 5px;
	font-size: 12px;
	line-height: 16px;
}

.tip .tip-title {
	padding: 2px 8px;
}

.tip .tip-body {
	padding: 8px;
	background: #fff;
	color: #666;
	border-radius: 0 0 3px 3px;
	font-size: 12px;
	line-height: 20px;
}

.tip .image {
	border-radius: 3px;
}

.tip-bottom.border-red .arrow {
	border-bottom-color: #f00;
}

.tip.bg-main,
.tip.bg-sub,
.tip.bg-dot,
.tip.bg-red,
.tip.bg-yellow,
.tip.bg-green {
	color: #fff;
}


/*警告框*/

.alert {
	border-radius: 5px;
	padding: 15px;
	border: solid 1px #ddd;
	background-color: #f5f5f5;
}

.alert .close {
	float: right;
	line-height: 18px;
}


/*多选单选*/

.radio .icon,
.checkbox .icon {
	display: none;
}

.radio .active .icon,
.checkbox .active .icon {
	display: inline-block;
}


/*折叠*/

.collapse .panel {
	margin-bottom: 5px;
}

.collapse .panel:last-child {
	margin-bottom: 0;
}

.collapse .panel .panel-head {
	border-bottom-width: 0;
}

.collapse .panel .panel-body {
	display: none;
}

.collapse .panel.active .panel-head {
	border-bottom-width: 1px;
}

.collapse .panel.active .panel-body {
	display: block;
}

.collapse .panel.toggle-actvie .panel-head {
	border-bottom-width: 1px;
}

.collapse .panel.toggle-actvie .panel-body {
	display: block;
}


/*banner*/

.banner {
	position: relative;
	width: 100%;
	overflow: hidden;
}

.carousel {
	position: relative;
	list-style: none;
	padding: 0;
}

.carousel .item {
	display: nones;
	float: left;
	position: relative;
}

.carousel .active {
	display: block;
}

.carousel img {
	display: block;
	max-width: 100%;
	height: auto;
}

.banner .pointer {
	position: absolute;
	bottom: 0;
	padding: 15px;
}

.banner .pager-prev,
.banner .pager-next {
	position: absolute;
	display: none;
	top: 50%;
	margin-top: -25px;
}

.banner .pager-prev {
	left: 20px;
}

.banner .pager-next {
	right: 20px;
}

.banner:hover .pager-prev,
.banner:hover .pager-next {
	display: block;
}


/*导航列表按钮*/

.icon-navicon {
	display: none;
}

@media (max-width: 760px) {
	.icon-navicon {
		display: block;
	}
	.nav-navicon,
	.nav.nav-navicon,
	.navbar-body.nav-navicon {
		display: none;
	}
}


/*默认导航*/

.nav {
	list-style: none;
	padding: 5px 0 0 0;
	margin: 0;
}

.nav li {
	position: relative;
}

.nav a {
	color: #333;
	line-height: 20px;
	padding: 5px 0;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
	display: block;
}

.nav a:hover {
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.nav .arrow {
	display: none;
}

.nav .active a {
	font-weight: bold;
}

.nav-head {
	font-size: 14px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
}

@media (min-width: 760px) {
	/*默认-内联*/
	.nav {
		padding: 0;
	}
	.nav-inline .nav-head {
		padding-right: 20px;
	}
	.nav-inline li {
		display: inline-block;
		vertical-align: top;
	}
	.nav-inline li a {
		padding: 5px 20px;
		line-height: 20px;
		display: block;
	}
	.nav-inline .nav-more {
		float: right;
	}
	/*导航分隔线*/
	.nav-split .nav-head {
		height: 20px;
		line-height: 20px;
	}
	.nav-split li {
		border-right: solid 1px rgba(0, 0, 0, .20);
	}
	.nav-split li a {
		padding: 0px 20px;
	}
	.nav-split .nav-head,
	.nav-split ul li,
	.nav-split li:last-child {
		border-right-width: 0;
	}
	/*右对齐*/
	.nav-right {
		text-align: right;
	}
	.nav-right .nav-head {
		float: left;
	}
	/*两端对齐*/
	.nav.nav-justified {
		display: table;
		width: 100%;
	}
	.nav-justified .nav-head {
		padding: 0 20px;
		float: none;
	}
	.nav-justified .nav-more {
		float: none;
	}
	.nav-justified li {
		display: table-cell;
	}
	.nav-justified .nav-head,
	.nav-justified li a {
		text-align: center;
		display: block;
	}
	.nav-justified.nav-split .nav-head {
		padding: 0 20px;
		border-right-width: 1px;
	}
	/*大号*/
	.nav-big .nav-head {
		font-size: 18px;
		height: 30px;
		line-height: 30px;
		padding: 0 20px;
	}
	.nav-big a {
		font-size: 18px;
		line-height: 30px;
	}
	.nav-big.nav-split a {
		line-height: 30px;
	}
}


/*主要导航*/

.nav-main .nav-head {
	border: solid 1px #ddd;
	background: #ddd;
	padding: 0 20px;
	line-height: 28px;
}

.nav-main li {
	margin-top: -1px;
}

.nav-main a {
	border: solid 1px #ddd;
	padding: 4px 20px;
}

.nav-main a:hover {
	background: #f5f5f5;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.nav-main .active {
	background-color: #f5f5f5;
}

.nav-main li:first-child,
.nav-main li:first-child a {
	border-radius: 4px 4px 0 0;
}

.nav-main li:last-child a {
	border-radius: 0 0 4px 4px;
}

.nav-main ul li:first-child a,
.nav-main ul li:last-child a {
	border-radius: 0;
}

@media (min-width: 760px) {
	/*主要导航-内联*/
	.nav-main.nav-inline {
		padding: 0 0 0 1px;
	}
	.nav-main.nav-inline a {
		padding: 4px 20px;
	}
	.nav-main.nav-inline li {
		float: left;
		margin: 0 0 0 -1px;
	}
	.nav-main.nav-inline li:first-child,
	.nav-main.nav-inline li:first-child a {
		border-radius: 4px 0 0 4px;
	}
	.nav-main.nav-inline li:last-child a {
		border-radius: 0 4px 4px 0;
	}
	.nav-main.nav-inline ul li {
		float: none;
		margin: 0;
	}
	.nav-main.nav-justified .nav-head {
		float: none;
	}
	.nav-main.nav-justified {
		width: 100%;
		display: table;
	}
	.nav-main.nav-justified li {
		width: auto;
		float: none;
		margin-left: -1px;
	}
	.nav-main.nav-justified > li + li > a {
		border-left: 0 none;
	}
	.nav-main.nav-big .nav-head {
		height: 40px;
		line-height: 38px;
	}
	.nav-main.nav-big.nav-inline a {
		line-height: 30px;
	}
}

.nav-main.border-main .nav-head,
.nav-main.border-sub .nav-head,
.nav-main.border-dot .nav-head,
.nav-main.border-black .nav-head,
.nav-main.border-gray .nav-head,
.nav-main.border-red .nav-head,
.nav-main.border-yellow .nav-head,
.nav-main.border-blue .nav-head,
.nav-main.border-green .nav-head {
	color: #fff;
}


/*辅助导航*/

.nav-sub .nav-head {
	border-bottom: solid 2px #ddd;
	margin-bottom: 2px;
	padding: 0 20px;
	height: 30px;
	line-height: 28px;
}

.nav-sub a {
	border-bottom: solid 2px #ddd;
	display: block;
	margin-bottom: 2px;
	border-radius: 4px 4px 0 0;
	padding: 4px 20px;
}

.nav-sub a:hover {
	background: #f5f5f5;
}

.nav-sub .active a {
	border-color: #333;
}

@media (min-width: 760px) {
	.nav-sub.nav-inline li {
		float: left;
		margin: 0;
	}
	.nav-sub.nav-inline a {
		padding: 4px 20px;
		margin: 0;
	}
	.nav-sub.nav-justified {
		width: 100%;
		display: table;
	}
	.nav-sub.nav-justified li {
		width: auto;
		float: none;
	}
	.nav-sub.nav-big .nav-head {
		line-height: 38px;
		height: 40px;
	}
	.nav-sub.nav-big a {
		line-height: 30px;
	}
}


/*标签导航*/

.nav-tabs .nav-head {
	line-height: 30px;
	padding: 0 20px;
}

.nav-tabs a {
	display: block;
	border-radius: 4px;
	padding: 5px 20px;
	margin-bottom: 2px;
}

.nav-tabs .active a {
	border: solid 1px #ddd;
	padding-top: 4px;
	padding-bottom: 4px;
}

.nav-tabs a:hover {
	background: #f5f5f5;
}

@media (min-width: 760px) {
	.nav-tabs.nav-inline {
		border-bottom: solid 1px #ddd;
		position: relative;
	}
	.nav-tabs.nav-inline .nav-head {
		height: 29px;
		line-height: 29px;
	}
	.nav-tabs.nav-inline a {
		border-radius: 4px 4px 0 0;
		text-align: center;
		margin: 0;
		position: relative;
		padding-bottom: 4px;
	}
	.nav-tabs.nav-inline .active a {
		border-bottom: none;
		background: #fff;
		margin-bottom: -1px;
		padding: 4px 20px 5px 20px;
	}
	.nav-tabs.nav-big .nav-head {
		line-height: 39px;
		height: 39px;
	}
	.nav-tabs.nav-big a {
		padding: 10px 20px 9px 20px;
	}
	.nav-tabs.nav-big .active a {
		padding: 9px 20px 10px 20px;
	}
}


/*胶囊导航*/

.nav-pills .nav-head {
	line-height: 30px;
	padding: 0 20px;
}

.nav-pills a {
	display: block;
	border-radius: 2em;
	margin-bottom: 2px;
	padding: 5px 20px;
}

.nav-pills .active a,
.nav-pills a:hover {
	background: #f5f5f5;
}

.nav-pills .active ul a {
	background: #fff;
}

@media (min-width: 760px) {
	.nav-pills.nav-inline a {
		margin: 0;
	}
	.nav-pills.nav-justified {
		width: 100%;
		display: table;
	}
	.nav-pills.nav-justified li {
		width: auto;
	}
	.nav-pills.nav-big .nav-head {
		line-height: 40px;
		height: 40px;
	}
	.nav-pills.nav-big.nav-inline a {
		line-height: 30px;
	}
}

.nav-pills.border-main .active a,
.nav-pills.border-sub .active a,
.nav-pills.border-dot .active a,
.nav-pills.border-black .active a,
.nav-pills.border-gray .active a,
.nav-pills.border-red .active a,
.nav-pills.border-yellow .active a,
.nav-pills.border-blue .active a,
.nav-pills.border-green .active a {
	color: #fff;
}


/*站点地图*/

.nav.nav-sitemap {
	list-style: none;
	display: table;
	width: 100%;
	margin-bottom: 15px;
}

.nav-sitemap ul {
	padding-left: 0;
}

.nav-sitemap li {
	font-weight: bold;
	display: table-cell;
	text-align: left;
}

.nav-sitemap ul li {
	display: block;
	float: none;
	font-weight: normal;
	line-height: 25px;
}


/*反色*/

.bg-inverse .nav {
	padding: 5px 0;
}

.bg-inverse .nav li a:hover,
.bg-inverse .nav .active a {
	background-color: rgba(0, 0, 0, .20);
	color: #fff;
}

.bg-inverse .nav-inline .nav-head,
.bg-inverse .nav-inline li a {
	text-indent: 1em;
}


/*for mobile*/

@media (min-width: 760px) {
	.bg-inverse .nav {
		padding: 0;
	}
	.bg-inverse .nav-inline .nav-head {
		height: 40px;
		line-height: 40px;
		padding: 0 20px;
		text-indent: 0;
	}
	.bg-inverse .nav-inline li {
		float: left;
		margin-right: 1px;
	}
	.bg-inverse .nav-inline li a {
		line-height: 30px;
		padding: 5px 20px;
		text-indent: 0;
	}
	.bg-inverse .nav-split .nav-head {
		border-right-width: 1px;
	}
	.bg-inverse .nav-split li {
		margin: 0;
	}
	.bg-inverse .nav-justified li {
		float: none;
	}
	.bg-inverse .nav-inline.nav-big li a {
		line-height: 40px;
	}
	.bg-inverse .nav-inline.nav-big .nav-head {
		height: 50px;
		line-height: 50px;
		padding: 0 20px;
	}
}

.bg-inverse .nav-tabs {
	padding: 5px;
}

.bg-inverse .nav-tabs .nav-head,
.bg-inverse .nav-tabs li a {
	text-indent: 0;
}

.bg-inverse .nav-tabs.nav-inline,
.bg-inverse .nav-tabs li a {
	border: none;
}

.bg-inverse .nav.nav-tabs .active a,
.bg-inverse .nav.nav-tabs a:hover {
	color: #333;
	background-color: #fff;
	padding-top: 5px;
	padding-bottom: 5px;
}

@media (min-width: 760px) {
	.bg-inverse .nav-tabs {
		padding: 0;
	}
	.bg-inverse .nav-tabs li a {
		margin: 5px 0;
		padding: 5px 20px;
		line-height: 20px;
		border-radius: 4px;
	}
	.bg-inverse .nav.nav-tabs .active a {
		margin: 5px 0 0 0;
		border: none;
		line-height: 25px;
		border-radius: 4px 4px 0 0;
	}
	.bg-inverse .nav.nav-tabs.nav-big a {
		margin: 5px 0;
		padding: 0 20px;
	}
	.bg-inverse .nav.nav-tabs.nav-big .active a {
		margin: 5px 0 0 0;
		padding: 0 20px;
		line-height: 45px;
	}
}

.bg-inverse .nav-pills {
	padding: 5px;
}

.bg-inverse .nav-pills .nav-head,
.bg-inverse .nav-pills li a {
	text-indent: 0;
}

@media (min-width: 760px) {
	.bg-inverse .nav-pills {
		padding: 0;
	}
	.bg-inverse .nav-pills li a {
		line-height: 20px;
		margin: 5px 0;
	}
	.bg-inverse .nav-pills.nav-big li a {
		line-height: 30px;
		margin: 5px 0;
		padding: 5px 20px;
	}
}

.bg-inverse .nav-sitemap li a {
	text-indent: 0.5em;
}

.bg-inverse .nav.nav-pills .active a,
.bg-inverse .nav.nav-pills.nav-inline a:hover {
	color: #333;
	background-color: #fff;
}


/*导航条*/

.navbar {
	position: relative;
}

.navbar-head {
	padding: 5px;
	line-height: 30px;
}

.navbar-head .logo {
	padding: 3px 0;
	display: block;
}

.navbar-head .icon-navicon {
	padding: 4px 12px;
	font-size: 16px;
	float: right;
}

.navbar-big .navbar-head .icon-navicon {
	margin-top: 5px;
}

.navbar-big .navbar-head .logo {
	padding: 2px 0;
	display: block;
}

.navbar p {
	margin: 0;
}

.navbar-body {
	border: solid 1px rgba(0, 0, 0, .2);
	margin-top: 1px;
	border-top: none;
	display: block;
	background: rgba(0, 0, 0, .05);
	position: absolute-bak;
	width: 100%;
}

.navbar-body .nav {
	margin-top: -1px;
	padding: 0;
}

.navbar-body .nav a {
	text-indent: 1em;
}

.navbar-body .nav li {
	border-top: solid 1px rgba(0, 0, 0, .2);
}

.navbar-form input {
	vertical-align: bottom;
}

.navbar-form,
.navbar-text {
	border-top: solid 1px rgba(0, 0, 0, .2);
	padding: 5px 14px;
	margin-top: -1px;
}

.navbar-body .input,
.navbar-body .button {
	padding: 4px 10px;
	height: 30px;
}

.navbar-body .nav-pills a {
	text-indent: 0;
}

@media (max-width: 760px) {
	.navbar-body .nav a {
		border-radius: 0;
		margin-bottom: 0px;
	}
	.navbar-body .nav a:hover {
		background: #fff;
	}
}

@media (min-width: 760px) {
	.navbar-body,
	.navbar-body .nav,
	.navbar-form,
	.navbar-text {
		margin-top: 0;
		border: 0;
	}
	.navbar-body .nav a {
		text-indent: 0;
	}
	.navbar-head {
		float: left;
		padding: 0 5px 0 0;
	}
	.navbar-body {
		background: transparent;
		margin: 0;
		position: relative;
	}
	.navbar-body .nav li {
		float: left;
		border: 0;
	}
	.navbar-body .nav ul li {
		float: none;
	}
	.navbar-form {
		padding: 0 10px;
	}
	.navbar-text {
		padding: 0;
		line-height: 30px;
	}
	.navbar-left {
		float: left;
	}
	.navbar-right {
		float: right;
	}
	.bg-inverse .navbar-head,
	.bg-inverse .navbar-text {
		padding: 5px;
	}
	.bg-inverse .navbar-form {
		padding: 5px 10px;
	}
	.navbar-big .navbar-head {
		line-height: 40px;
	}
	.navbar-big .navbar-text {
		padding: 8px;
		font-size: 18px;
	}
	.navbar-big .navbar-form {
		padding: 8px 10px;
	}
	.navbar-big .navbar-body .input,
	.navbar-big .navbar-body .button {
		padding: 5px 10px;
		height: 34px;
	}
	.navbar-big .nav-pills a {
		margin: 5px 0;
	}
}


/*子菜单*/

.nav ul {
	display: block;
	list-style: none;
	padding: 0;
}

.nav ul a {
	font-weight: normal;
	padding: 5px 20px;
}

.nav ul ul a {
	padding-left: 40px;
}

.nav ul ul ul a {
	padding-left: 60px;
}

.nav ul ul ul ul a {
	padding-left: 80px;
}

.nav .active ul a {
	font-weight: normal;
}


/*下拉菜单*/

.nav-menu .drop-menu {
	display: none;
	margin-top: -1px;
}

.nav-menu ul {
	padding: 5px 0;
}

.nav-menu .arrow {
	display: inline-block;
}

.nav-menu ul .arrow {
	display: none;
}

.nav-menu li:hover ul {
	display: block;
}

.nav-menu.nav-big ul a {
	line-height: 20px;
}

.nav-menu ul ul,
.nav-menu.nav-main ul ul,
.nav-menu.nav-sub ul ul,
.nav-menu.nav-tabs ul ul,
.nav-menu.nav-pills ul ul {
	padding: 0;
}


/*去除三级菜单的间隙*/

.nav-menu ul a,
.nav-menu.nav-tabs ul a,
.nav-menu.nav-pills .active ul a,
.nav-menu.nav-big.nav-inline ul a,
.bg-inverse .nav-menu.nav-inline ul a,
.bg-inverse .nav-menu.nav-inline .active ul a,
.bg-inverse .nav-menu.nav-inline.nav-big ul a,
.bg-inverse .nav-menu.nav-inline.nav-big .active ul a,
.navbar-body .nav ul a {
	line-height: 20px;
	background: #fff;
	font-size: inherit;
	border: none;
	border-radius: 0;
	padding-top: 5px;
	padding-bottom: 5px;
	margin: 0;
	text-indent: 0;
}


/*清除二级导航样式*/

.nav-menu ul a,
.nav-menu.nav-pills .active ul a,
.bg-inverse .nav-menu ul a,
.bg-inverse .nav-menu .active ul a {
	color: #333;
}

.navbar-body .nav ul li {
	border: 0;
}

@media (min-width: 760px) {
	.nav-menu ul {
		position: absolute;
		display: none;
		left: 100%;
		top: -6px;
		z-index: 1;
		float: left;
		min-width: 160px;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ccc;
		border: 1px solid rgba(0, 0, 0, .15);
		border-radius: 4px;
		-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
	}
	.nav-menu .arrow {
		display: inline-block;
		float: right;
		margin-top: 6px;
		border-left: 4px solid;
		border-top: 4px solid transparent;
		border-bottom: 4px solid transparent;
	}
	.nav-menu ul .arrow {
		margin: 6px -10px 0 0;
		display: inline-block;
	}
	.nav-menu ul a,
	.nav-menu ul ul a,
	.nav-menu ul ul ul a,
	.nav-menu ul ul ul ul a {
		padding-left: 20px;
	}
	.nav-menu ul ul {
		padding: 5px 0;
	}
	.nav-menu li:hover ul ul,
	.nav-menu li:hover ul ul ul,
	.nav-menu li:hover ul ul ul ul {
		display: none;
	}
	.nav-menu li:hover ul,
	.nav-menu li li:hover ul,
	.nav-menu li li li:hover ul,
	.nav-menu li li li li:hover ul {
		display: block;
	}
	/*内联*/
	.nav-inline.nav-menu ul {
		top: 100%;
		left: 0;
	}
	.nav-inline.nav-menu ul li {
		display: block;
	}
	.nav-inline.nav-menu ul ul {
		top: -6px;
		left: 100%;
	}
	.nav-inline.nav-menu ul a {
		display: block;
		padding: 5px 20px;
		text-align: left;
		font-size: inherit;
	}
	.nav-inline.nav-menu ul a:hover {
		background: #f5f5f5;
	}
	.nav-inline.nav-menu .arrow {
		float: none;
		border-top: 4px solid;
		border-right: 4px solid transparent;
		border-left: 4px solid transparent;
		margin-top: 0;
	}
	.nav-inline.nav-menu ul .arrow {
		float: right;
		margin-top: 6px;
		border-left: 4px solid;
		border-top: 4px solid transparent;
		border-bottom: 4px solid transparent;
	}
	.nav-main .arrow,
	.nav-main.nav-inline ul .arrow,
	.nav-sub .arrow,
	.nav-sub.nav-inline ul .arrow,
	.nav-tabs .arrow,
	.nav-tabs.nav-inline ul .arrow,
	.nav-pills .arrow,
	.nav-pills.nav-inline ul .arrow {
		margin-right: -10px;
	}
	.nav-main.nav-inline .arrow,
	.nav-sub.nav-inline .arrow,
	.nav-tabs.nav-inline .arrow,
	.nav-pills.nav-inline .arrow {
		margin-right: 0;
	}
	.nav-menu ul ul,
	.nav-menu.nav-main ul ul,
	.nav-menu.nav-sub ul ul,
	.nav-menu.nav-tabs ul ul,
	.nav-menu.nav-pills ul ul {
		padding: 5px 0;
	}
	.nav-main.nav-inline ul li,
	.nav-sub.nav-inline ul li,
	.bg-inverse .nav-inline ul li {
		float: none;
	}
}


/*固定*/

.fixed-top {
	position: fixed;
	top: 0;
}

.fixed-bottom {
	position: fixed;
	bottom: 0;
}

.fixed-left {
	position: fixed;
	left: 0;
}

.fixed-right {
	position: fixed;
	right: 0;
}

.fixed-top-left {
	position: fixed;
	top: 0;
	left: 0;
}

.fixed-top-right {
	position: fixed;
	top: 0;
	right: 0;
}

.fixed-bottom-left {
	position: fixed;
	bottom: 0;
	left: 0;
}

.fixed-bottom-right {
	position: fixed;
	bottom: 0;
	right: 0;
}


/*路径导航*/

.bread {
	border-radius: 4px;
	padding: 8px 15px;
	font-size: 12px;
	margin-bottom: 15px;
	color: #999;
}

.bread li {
	display: inline-block;
}

.bread li:after {
	content: "\002f";
	padding: 0 8px;
	color: #ddd;
}

.bread li:last-child:after {
	content: "";
}

.step {
	position: relative;
	height: 10px;
	border-radius: 5px;
	background-color: #f5f5f5;
	margin-bottom: 30px;
	border-radius: 5px;
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

.step-bar {
	position: relative;
	height: 10px;
	float: left;
	display: inline-block;
	text-align: center;
	color: #aaa;
}

.step-bar:first-child {
	border-radius: 5px 0 0 5px;
}

.step-bar:last-child {
	border-radius: 0 5px 5px 0;
}

.step-point {
	position: relative;
	display: inline-block;
	width: 20px;
	height: 20px;
	line-height: 20px;
	top: -5px;
	border-radius: 50%;
	color: #fff;
	background-color: #bbb;
	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .175);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, .175);
}

.step-text {
	display: block;
}

.step .complete,
.step .complete .step-point {
	background: #cf9;
}

.step .active,
.step .active .step-point {
	background: #0a0;
}


/*列表*/

.list-text {
	list-style: inside;
	padding: 0;
}

.list-text li {
	line-height: 24px;
}

.list-text .date {
	font-size: 12px;
	float: right;
}

.list-text .divider {
	list-style-type: none;
	background-color: #ddd;
	height: 1px;
	overflow: hidden;
	margin: 15px 0;
}

.list-text.list-underline {
	list-style: outside;
	padding-left: 15px;
}

.list-text.list-underline li {
	border-bottom: solid 1px #ddd;
	line-height: 36px;
}

.list-underline.list-striped li {
	padding: 0 10px;
}

.list-text.list-striped {
	list-style: none;
	padding: 0;
}

.list-box a {
	background-color: #f5f5f5;
	display: block;
	padding: 15px;
	height: 150px;
	text-align: justify;
	font-size: 16px;
	text-overflow: ellipsis;
	overflow: hidden;
}

.list-box .date {
	display: block;
	font-size: 12px;
}

.list-media {
	list-style: none;
	padding: 0;
}

.list-media li {
	margin-bottom: 10px;
}

.list-media.list-underline li {
	padding-bottom: 15px;
	border-bottom: solid 1px #ddd;
	line-height: inherit;
}


/*分页*/

.pagination {
	list-style: none;
	margin: 0;
	padding: 0;
	display: inline-block;
	vertical-align: bottom;
}

.pagination li {
	display: inline-block;
	border: solid 1px #ddd;
	border-radius: 4px;
}

.pagination a {
	color: #333;
	padding: 8px 12px;
	line-height: 18px;
	display: block;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.pagination .disabled a:link,
.pagination .disabled a:visited,
.pagination .disabled a:hover {
	cursor: not-allowed;
	pointer-events: none;
	color: #ddd;
}

.pagination .active {
	pointer-events: none;
}

.pagination .active,
.pagination a:hover {
	background: #f5f5f5;
	border-radius: 4px;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.pagination-group {
	border-right: solid 1px #ddd;
	border-radius: 4px;
}

.pagination-group li {
	float: left;
	border-right: none;
	border-radius: 0;
}

.pagination-group li:not(:first-child):not(:last-child) {
	border-radius: 0;
}

.pagination-group li:first-child {
	border-radius: 4px 0 0 4px;
}

.pagination-group li:last-child {
	border-radius: 0 4px 4px 0;
}

.pagination-group .active,
.pagination-group a:hover {
	background: #f5f5f5;
	border-radius: 0;
}

.pagination-big a {
	padding: 10px 16px;
	font-size: 16px;
}

.pagination-small a {
	padding: 5px 10px;
	font-size: 12px;
}

.pagination.border-main .active a,
.pagination.border-sub .active a,
.pagination.border-dot .active a,
.pagination.border-black .active a,
.pagination.border-gray .active a,
.pagination.border-red .active a,
.pagination.border-yellow .active a,
.pagination.border-blue .active a,
.pagination.border-green .active a {
	color: #fff;
}

.pager {
	list-style: none;
	padding: 0;
	text-align: center;
	clear: both;
}

.pager li {
	display: inline-block;
}

.pager li a {
	color: #333;
	border: solid 1px #ddd;
	border-radius: 15px;
	padding: 5px 15px;
	transition: all 1s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.pager li a:hover {
	background-color: #f5f5f5;
	transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1) 0s;
}

.pager-prev,
.pager .pager-prev,
.pager-next,
.pager .pager-next {
	font-size: 36px;
	padding: 0;
	color: #ddd;
	border: solid 1px #ddd;
	background-color: rgba(255, 255, 255, .2);
	width: 50px;
	height: 50px;
	line-height: 45px;
	display: inline-block;
	border-radius: 50%;
	text-align: center;
	cursor: pointer;
}

.pager-prev:hover,
.pager-next:hover {
	background-color: rgba(0, 0, 0, .2);
}

.pager-group li {
	float: left;
	display: inline-block;
}

.pager-group li:not(:first-child):not(:last-child) {
	border-radius: 0;
}

.pager-group li a:first-child {
	border-radius: 4px 0 0 4px;
}

.pager-group li a:last-child {
	border-radius: 0 4px 4px 0;
}

.pointer {
	padding: 0px;
}

.pointer li {
	border: solid 1px #ddd;
	width: 10px;
	height: 10px;
	margin: 1px;
	display: inline-block;
	border-radius: 10px;
	cursor: pointer;
}

.pointer .active {
	border: none;
	background: #ddd;
	width: 12px;
	height: 12px;
	margin: 0;
}


/*内容*/

.keypoint {
	padding: 50px;
}

.keypoint h1 {
	font-size: 48px;
	margin-bottom: 15px;
}

.keypoint p {
	font-size: 18px;
}

.detail h1 {
	text-align: center;
}

.detail p {
	text-indent: 2em;
}


/*-----------------------CSS--------------------------*/


/*文本*/


/*标题*/

h1,
.h1 {
	font-size: 24px;
}

h2,
.h2 {
	font-size: 20px;
}

h3,
.h3 {
	font-size: 18px;
}

h4,
.h4 {
	font-size: 16px;
}

h5,
.h5 {
	font-size: 14px;
}

h6,
.h6 {
	font-size: 12px;
}

h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small {
	font-size: 60%;
	filter: alpha(opacity=60);
	opacity: .6;
}

h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small {
	font-size: 12px;
	filter: alpha(opacity=60);
	opacity: .6;
}


/*段落*/

p,
.p {
	margin-bottom: 15px;
	line-height: 24px;
}

.text-indent,
.text-indent p,
.text-indent div {
	text-indent: 2em;
}


/*对齐*/

.text-left {
	text-align: left;
}

.text-center {
	text-align: center;
}

.text-right {
	text-align: right;
}

.text-justify {
	text-align: justify;
}


/*字号*/

.text-large {
	font-size: 24px;
}

.text-big {
	font-size: 16px;
}

.text-default {
	font-size: 14px;
}

.text-small {
	font-size: 12px;
}

.text-little {
	font-size: 10px;
}


/*行距*/

.height-large {
	line-height: 40px;
}

.height-big {
	line-height: 30px;
}

.height {
	line-height: 24px;
}

.height-small {
	line-height: 20px;
}

.height-little {
	line-height: 16px;
}


/*边框,全,上,下,左,右*/

.border {
	border: solid 1px #ddd;
}

.border-top {
	border-top: solid 1px #ddd;
}

.border-right {
	border-right: solid 1px #ddd;
}

.border-bottom {
	border-bottom: solid 1px #ddd;
}

.border-left {
	border-left: solid 1px #ddd;
}

.border-left-right {
	border-left: solid 1px #ddd;
	border-right: solid 1px #ddd;
}

.border-top-bottom {
	border-top: solid 1px #ddd;
	border-bottom: solid 1px #ddd;
}

.border-large {
	border-width: 10px;
}

.border-big {
	border-width: 5px;
}

.border-middle {
	border-width: 3px;
}

.border-small {
	border-width: 2px;
}


/*水平线*/

hr {
	background: #ddd;
	color: #ddd;
	clear: both;
	float: none;
	width: 100%;
	height: 1px;
	margin: 10px 0;
	border: none;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

hr.space {
	background: #fff;
	color: #fff;
	visibility: hidden;
}


/*图片*/


/*图片样式*/

.img-border {
	border: solid 1px #ddd;
	padding: 4px;
}

.img-responsive {
	display: block;
	max-width: 100%;
	height: auto;
}


/*无序有序列表*/

ul {
	padding-left: 20px;
}

ol {
	padding-left: 24px;
}

.list-cn {
	list-style-type: cjk-ideographic;
}

.list-alpha {
	list-style-type: upper-alpha;
}

.list-unstyle {
	list-style: none;
	padding-left: 0;
}

.list-unstyle ul {
	list-style: disc;
}

.list-inline li {
	display: inline-block;
	padding: 0 10px;
	width: auto;
}


/*描述*/

dt {
	font-weight: bold;
}

dd {
	padding: 8px 0 15px 0;
}

@media (min-width: 760px) {
	.dl-inline dt {
		width: 15%;
		display: inline-block;
		float: left;
		text-align: right;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	.dl-inline dd {
		width: 85%;
		display: inline-block;
		float: left;
		padding: 0 0 15px 15px;
	}
}


/*表格*/

.table {
	width: 100%;
	max-width: 100%;
	border-collapse: collapse;
	border-spacing: 0;
}

.table th {
	border-bottom: 2px solid #ddd;
	vertical-align: bottom;
	padding: 8px;
	text-align: left;
}

.table td {
	border-top: 1px solid #ddd;
	padding: 8px;
	vertical-align: top;
}

.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
	background-color: #f9f9f9;
}


/*条纹-IE9以下无效果*/

.table-bordered th,
.table-bordered td {
	border: solid 1px #ddd;
}

.table-bordered th {
	border-bottom: 2px solid #ddd;
}

.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
	background-color: #f5f5f5;
}


/*不支持IE6*/

.table-condensed th,
.table-condensed td {
	padding: 5px;
}

@media (max-width: 800px) {
	.table-responsive {
		width: 100%;
		overflow-x: scroll;
		overflow-y: hidden;
		-webkit-overflow-scrolling: touch;
		-ms-overflow-style: -ms-autohiding-scrollbar;
	}
	.table-responsive .table tr th,
	.table-responsive .table tr td {
		white-space: nowrap;
	}
}


/*大火兔2015-11-19 新增表格响应式纵方式排列*/


/*表格响应式纵方式*/

@media only screen and (max-width: 800px) {
	.table-responsive-y table,
	.table-responsive-y thead,
	.table-responsive-y tbody,
	.table-responsive-y th,
	.table-responsive-y td,
	.table-responsive-y tr {
		display: block;
	}
	.table-responsive-y thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	.table-responsive-y tr {
		border: 1px solid #ccc;
	}
	.table-responsive-y td {
		border: none;
		border-bottom: 1px solid #eee;
		position: relative;
		padding-left: 30%;
		white-space: normal;
		text-align: left;
	}
	.table-responsive-y td:before {
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%;
		padding-right: 10px;
		white-space: nowrap;
		text-align: left;
		font-weight: bold;
	}
	.table-responsive-y td:before {
		content: attr(data-title);
	}
}


/*引用*/

blockquote {
	border: solid 1px #ddd;
	border-left-width: 6px;
	padding: 20px;
	border-radius: 4px;
}

blockquote strong {
	display: block;
	font-size: 16px;
	margin-bottom: 10px;
}

blockquote p:last-child {
	margin: 0;
}

.quote-floatright {
	border-left-width: 1px;
	border-right-width: 6px;
	text-align: right;
}


/*快速设置浮动*/

.float-left {
	float: left !important;
}

.float-right {
	float: right !important;
}


/*清除浮动*/

.clearfix:after,
.layout:after,
.container:after,
.container-layout:after,
.line:after,
.line-small:after,
.line-middle:after,
.line-big:after,
.nav-main:after,
.nav-sub:after,
.navbar:after {
	content: " ";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
	overflow: hidden;
}

.clearfix,
.layout,
.container,
.container-layout,
.line,
.line-small,
.line-middle,
.line-big,
.nav-main,
.nav-sub,
.navbar {
	display: block;
}

.clear {
	clear: both;
}


/*print*/

.print-show {
	display: none !important;
}

@media print {
	.print-show {
		display: block !important;
	}
	table.print-show {
		display: table;
	}
	tr.print-show {
		display: table-row !important;
	}
	th.print-show,
	td.print-show {
		display: table-cell !important;
	}
	.print-hidden {
		display: none !important;
	}
}


/*显示隐藏*/

.show {
	display: block !important;
}

.hidden {
	display: none !important;
	visibility: hidden !important;
}


/*内边距,全,上,下,左,右*/

.padding-large {
	padding: 30px;
}

.padding-large-top {
	padding-top: 30px;
}

.padding-large-right {
	padding-right: 30px;
}

.padding-large-bottom {
	padding-bottom: 30px;
}

.padding-large-left {
	padding-left: 30px;
}

.padding-big {
	padding: 20px;
}

.padding-big-top {
	padding-top: 20px;
}

.padding-big-right {
	padding-right: 20px;
}

.padding-big-bottom {
	padding-bottom: 20px;
}

.padding-big-left {
	padding-left: 20px;
}

.padding {
	padding: 10px;
}

.padding-top {
	padding-top: 10px;
}

.padding-right {
	padding-right: 10px;
}

.padding-bottom {
	padding-bottom: 10px;
}

.padding-left {
	padding-left: 10px;
}

.padding-small {
	padding: 5px;
}

.padding-small-top {
	padding-top: 5px;
}

.padding-small-right {
	padding-right: 5px;
}

.padding-small-bottom {
	padding-bottom: 5px;
}

.padding-small-left {
	padding-left: 5px;
}

.padding-little {
	padding: 2px;
}

.padding-little-top {
	padding-top: 2px;
}

.padding-little-right {
	padding-right: 2px;
}

.padding-little-bottom {
	padding-bottom: 2px;
}

.padding-little-left {
	padding-left: 2px;
}


/*外边距,全,上,下,左,右*/

.margin-large {
	margin: 30px;
}

.margin-large-top {
	margin-top: 30px;
}

.margin-large-right {
	margin-right: 30px;
}

.margin-large-bottom {
	margin-bottom: 30px;
}

.margin-large-left {
	margin-left: 30px;
}

.margin-big {
	margin: 20px;
}

.margin-big-top {
	margin-top: 20px;
}

.margin-big-right {
	margin-right: 20px;
}

.margin-big-bottom {
	margin-bottom: 20px;
}

.margin-big-left {
	margin-left: 20px;
}

.margin {
	margin: 10px !important;
	clear: both;
}

.margin-top {
	margin-top: 10px;
}

.margin-right {
	margin-right: 10px;
}

.margin-bottom {
	margin-bottom: 10px;
}

.margin-left {
	margin-left: 10px;
}

.margin-small {
	margin: 5px;
}

.margin-small-top {
	margin-top: 5px;
}

.margin-small-right {
	margin-right: 5px;
}

.margin-small-bottom {
	margin-bottom: 5px;
}

.margin-small-left {
	margin-left: 5px;
}

.margin-little {
	margin: 2px;
}

.margin-little-top {
	margin-top: 2px;
}

.margin-little-right {
	margin-right: 2px;
}

.margin-little-bottom {
	margin-bottom: 2px;
}

.margin-little-left {
	margin-left: 2px;
}


/*圆角*/

.radius-none {
	border-radius: 0;
}

.radius-small {
	border-radius: 2px;
}

.radius {
	border-radius: 4px;
}

.radius-big {
	border-radius: 6px;
}

.radius-rounded {
	border-radius: 2em;
	padding-left: 1em;
	padding-right: 1em;
}

.radius-circle {
	border-radius: 50%;
}


/*阴影 2015-12-15 新增*/

.box-shadow-none {
	box-shadow: 0 0px 0px rgba(0, 0, 0, 0.5);
}

.box-shadow-small {
	box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
}

.box-shadow {
	box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
}

.box-shadow-big {
	box-shadow: 0 6px 9px rgba(0, 0, 0, 0.5);
}


/*动画*/

.bounce,
.bounce-hover,
.flash,
.flash-hover,
.shake,
.shake-hover,
.swing,
.swing-hover,
.wobble,
.wobble-hover,
.ring,
.ring-hover {
	-webkit-animation: 1s ease;
	-moz-animation: 1s ease;
	-ms-animation: 1s ease;
	animation: 1s ease;
}

.fadein,
.fadein-top,
.fadein-right,
.fadein-bottom,
.fadein-left,
.bouncein,
.rotatein {
	-webkit-animation: 1s ease-out backwards;
	-moz-animation: 1s ease-out backwards;
	-ms-animation: 1s ease-out backwards;
	animation: 1s ease-out backwards;
}

.fadeout,
.fadeout-top,
.fadeout-right,
.fadeout-bottom,
.fadeout-left,
.bounceout,
.rotateout {
	-webkit-animation: 1s ease-in forwards;
	-moz-animation: 1s ease-in forwards;
	-ms-animation: 1s ease-in forwards;
	animation: 1s ease-in forwards;
}

.rotate,
.rotate-hover {
	-webkit-animation: 2s infinite linear;
	-moz-animation: 2s infinite linear;
	-ms-animation: 2s infinite linear;
	animation: 2s infinite linear;
}


/*渐变-淡入*/

.fadein {
	-webkit-animation-name: a-fadein;
	-moz-animation-name: a-fadein;
	-ms-animation-name: a-fadein;
	animation-name: a-fadein;
}

@-webkit-keyframes a-fadein {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

@-moz-keyframes a-fadein {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

@-ms-keyframes a-fadein {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

@keyframes a-fadein {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}


/*淡入-从上*/

.fadein-top {
	-webkit-animation-name: fadeinT;
	-moz-animation-name: fadeinT;
	-ms-animation-name: fadeinT;
	animation-name: fadeinT;
}

@-webkit-keyframes fadeinT {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-50px);
	}
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeinT {
	0% {
		opacity: 0;
		-moz-transform: translateY(-50px);
	}
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-ms-keyframes fadeinT {
	0% {
		opacity: 0;
		-ms-transform: translateY(-50px);
	}
	100% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
}

@keyframes fadeinT {
	0% {
		opacity: 0;
		transform: translateY(-50px);
	}
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}


/*淡入-从右*/

.fadein-right {
	-webkit-animation-name: fadeinR;
	-moz-animation-name: fadeinR;
	-ms-animation-name: fadeinR;
	animation-name: fadeinR;
}

@-webkit-keyframes fadeinR {
	0% {
		opacity: 0;
		-webkit-transform: translateX(50px);
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeinR {
	0% {
		opacity: 0;
		-moz-transform: translateX(50px);
	}
	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-ms-keyframes fadeinR {
	0% {
		opacity: 0;
		-ms-transform: translateX(50px);
	}
	100% {
		opacity: 1;
		-ms-transform: translateX(0);
	}
}

@keyframes fadeinR {
	0% {
		opacity: 0;
		transform: translateX(50px);
	}
	100% {
		opacity: 1;
		transform: translateX(0);
	}
}


/*淡入-从下*/

.fadein-bottom {
	-webkit-animation-name: fadeinB;
	-moz-animation-name: fadeinB;
	-ms-animation-name: fadeinB;
	animation-name: fadeinB;
}

@-webkit-keyframes fadeinB {
	0% {
		opacity: 0;
		-webkit-transform: translateY(50px);
	}
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeinB {
	0% {
		opacity: 0;
		-moz-transform: translateY(50px);
	}
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-ms-keyframes fadeinB {
	0% {
		opacity: 0;
		-ms-transform: translateY(50px);
	}
	100% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
}

@keyframes fadeinB {
	0% {
		opacity: 0;
		transform: translateY(50px);
	}
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}


/*淡入-从左*/

.fadein-left {
	-webkit-animation-name: fadeinL;
	-moz-animation-name: fadeinL;
	-ms-animation-name: fadeinL;
	animation-name: fadeinL;
}

@-webkit-keyframes fadeinL {
	0% {
		opacity: 0;
		-webkit-transform: translateX(-50px);
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes fadeinL {
	0% {
		opacity: 0;
		-moz-transform: translateX(-50px);
	}
	100% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
}

@-ms-keyframes fadeinL {
	0% {
		opacity: 0;
		-ms-transform: translateX(-50px);
	}
	100% {
		opacity: 1;
		-ms-transform: translateX(0);
	}
}

@keyframes fadeinL {
	0% {
		opacity: 0;
		transform: translateX(-50px);
	}
	100% {
		opacity: 1;
		transform: translateX(0);
	}
}


/*渐变-淡出*/

.fadeout {
	-webkit-animation-name: a-fadeout;
	-moz-animation-name: a-fadeout;
	-ms-animation-name: a-fadeout;
	animation-name: a-fadeout;
}

@-webkit-keyframes a-fadeout {
	0% {
		opacity: 1;
	}
	100% {
		opacity: 0;
	}
}

@-moz-keyframes a-fadeout {
	0% {
		opacity: 1;
	}
	100% {
		opacity: 0;
	}
}

@-ms-keyframes a-fadeout {
	0% {
		opacity: 1;
	}
	100% {
		opacity: 0;
	}
}

@keyframes a-fadeout {
	0% {
		opacity: 1;
	}
	100% {
		opacity: 0;
	}
}


/*淡出-向上*/

.fadeout-top {
	-webkit-animation-name: fadeoutT;
	-moz-animation-name: fadeoutT;
	-ms-animation-name: fadeoutT;
	animation-name: fadeoutT;
}

@-webkit-keyframes fadeoutT {
	0% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-100px);
	}
}

@-moz-keyframes fadeoutT {
	0% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-moz-transform: translateY(-100px);
	}
}

@-ms-keyframes fadeoutT {
	0% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-ms-transform: translateY(-100px);
	}
}

@keyframes fadeoutT {
	0% {
		opacity: 1;
		transform: translateY(0);
	}
	100% {
		opacity: 0;
		transform: translateY(-100px);
	}
}


/*淡出-向右*/

.fadeout-right {
	-webkit-animation-name: fadeoutR;
	-moz-animation-name: fadeoutR;
	-ms-animation-name: fadeoutR;
	animation-name: fadeoutR;
}

@-webkit-keyframes fadeoutR {
	0% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateX(100px);
	}
}

@-moz-keyframes fadeoutR {
	0% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-moz-transform: translateX(100px);
	}
}

@-ms-keyframes fadeoutR {
	0% {
		opacity: 1;
		-ms-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-ms-transform: translateX(100px);
	}
}

@keyframes fadeoutR {
	0% {
		opacity: 1;
		transform: translateX(0);
	}
	100% {
		opacity: 0;
		transform: translateX(100px);
	}
}


/*淡出-向下*/

.fadeout-bottom {
	-webkit-animation-name: fadeoutB;
	-moz-animation-name: fadeoutB;
	-ms-animation-name: fadeoutB;
	animation-name: fadeoutB;
}

@-webkit-keyframes fadeoutB {
	0% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(100px);
	}
}

@-moz-keyframes fadeoutB {
	0% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-moz-transform: translateY(100px);
	}
}

@-ms-keyframes fadeoutB {
	0% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
	100% {
		opacity: 0;
		-ms-transform: translateY(100px);
	}
}

@keyframes fadeoutB {
	0% {
		opacity: 1;
		transform: translateY(0);
	}
	100% {
		opacity: 0;
		transform: translateY(100px);
	}
}


/*淡出-向左*/

.fadeout-left {
	-webkit-animation-name: fadeoutL;
	-moz-animation-name: fadeoutL;
	-ms-animation-name: fadeoutL;
	animation-name: fadeoutL;
}

@-webkit-keyframes fadeoutL {
	0% {
		opacity: 1;
		-webkit-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateX(-100px);
	}
}

@-moz-keyframes fadeoutL {
	0% {
		opacity: 1;
		-moz-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-moz-transform: translateX(-100px);
	}
}

@-ms-keyframes fadeoutL {
	0% {
		opacity: 1;
		-ms-transform: translateX(0);
	}
	100% {
		opacity: 0;
		-ms-transform: translateX(-100px);
	}
}

@keyframes fadeoutL {
	0% {
		opacity: 1;
		transform: translateX(0);
	}
	100% {
		opacity: 0;
		transform: translateX(-100px);
	}
}


/*弹跳*/

.bounce,
.bounce-hover:hover {
	-webkit-animation-name: a-bounce;
	-moz-animation-name: a-bounce;
	-ms-animation-name: a-bounce;
	animation-name: a-bounce;
}

@-webkit-keyframes a-bounce {
	0%,
	20%,
	50%,
	80%,
	100% {
		-webkit-transform: translateY(0);
	}
	40% {
		-webkit-transform: translateY(-30px);
	}
	60% {
		-webkit-transform: translateY(-15px);
	}
}

@-moz-keyframes a-bounce {
	0%,
	20%,
	50%,
	80%,
	100% {
		-moz-transform: translateY(0);
	}
	40% {
		-moz-transform: translateY(-30px);
	}
	60% {
		-moz-transform: translateY(-15px);
	}
}

@-ms-keyframes a-bounce {
	0%,
	20%,
	50%,
	80%,
	100% {
		-ms-transform: translateY(0);
	}
	40% {
		-ms-transform: translateY(-30px);
	}
	60% {
		-ms-transform: translateY(-15px);
	}
}

@keyframes a-bounce {
	0%,
	20%,
	50%,
	80%,
	100% {
		transform: translateY(0);
	}
	40% {
		transform: translateY(-30px);
	}
	60% {
		transform: translateY(-15px);
	}
}


/*弹入*/

.bouncein {
	-webkit-animation-name: a-bouncein;
	-moz-animation-name: a-bouncein;
	-ms-animation-name: a-bouncein;
	animation-name: a-bouncein;
}

@-webkit-keyframes a-bouncein {
	0% {
		opacity: 0;
		-webkit-transform: scale(0.3);
	}
	50% {
		opacity: 1;
		-webkit-transform: scale(1.05);
	}
	70% {
		-webkit-transform: scale(0.9);
	}
	100% {
		-webkit-transform: scale(1);
	}
}

@-moz-keyframes a-bouncein {
	0% {
		opacity: 0;
		-moz-transform: scale(0.3);
	}
	50% {
		opacity: 1;
		-moz-transform: scale(1.05);
	}
	70% {
		-moz-transform: scale(0.9);
	}
	100% {
		-moz-transform: scale(1);
	}
}

@-ms-keyframes a-bouncein {
	0% {
		opacity: 0;
		-ms-transform: scale(0.3);
	}
	50% {
		opacity: 1;
		-ms-transform: scale(1.05);
	}
	70% {
		-ms-transform: scale(0.9);
	}
	100% {
		-ms-transform: scale(1);
	}
}

@keyframes a-bouncein {
	0% {
		opacity: 0;
		transform: scale(0.3);
	}
	50% {
		opacity: 1;
		transform: scale(1.05);
	}
	70% {
		transform: scale(0.9);
	}
	100% {
		transform: scale(1);
	}
}


/*弹出*/

.bounceout {
	-webkit-animation-name: a-bounceout;
	-moz-animation-name: a-bounceout;
	-ms-animation-name: a-bounceout;
	animation-name: a-bounceout;
}

@-webkit-keyframes a-bounceout {
	0% {
		-webkit-transform: scale(1);
	}
	25% {
		-webkit-transform: scale(0.95);
	}
	50% {
		opacity: 1;
		-webkit-transform: scale(1.1);
	}
	100% {
		opacity: 0;
		-webkit-transform: scale(0.3);
	}
}

@-moz-keyframes a-bounceout {
	0% {
		-moz-transform: scale(1);
	}
	25% {
		-moz-transform: scale(0.95);
	}
	50% {
		opacity: 1;
		-moz-transform: scale(1.1);
	}
	100% {
		opacity: 0;
		-moz-transform: scale(0.3);
	}
}

@-ms-keyframes a-bounceout {
	0% {
		-ms-transform: scale(1);
	}
	25% {
		-ms-transform: scale(0.95);
	}
	50% {
		opacity: 1;
		-ms-transform: scale(1.1);
	}
	100% {
		opacity: 0;
		-ms-transform: scale(0.3);
	}
}

@keyframes a-bounceout {
	0% {
		transform: scale(1);
	}
	25% {
		transform: scale(0.95);
	}
	50% {
		opacity: 1;
		transform: scale(1.1);
	}
	100% {
		opacity: 0;
		transform: scale(0.3);
	}
}


/*转入*/

.rotatein {
	-webkit-animation-name: a-rotatein;
	-moz-animation-name: a-rotatein;
	-ms-animation-name: a-rotatein;
	animation-name: a-rotatein;
}

@-webkit-keyframes a-rotatein {
	0% {
		opacity: 0;
		-webkit-transform: rotate(-200deg);
	}
	100% {
		opacity: 1;
		-webkit-transform: rotate(0);
	}
}

@-moz-keyframes a-rotatein {
	0% {
		opacity: 0;
		-moz-transform: rotate(-200deg);
	}
	100% {
		opacity: 1;
		-moz-transform: rotate(0);
	}
}

@-ms-keyframes a-rotatein {
	0% {
		opacity: 0;
		-ms-transform: rotate(-200deg);
	}
	100% {
		opacity: 1;
		-ms-transform: rotate(0);
	}
}

@keyframes a-rotatein {
	0% {
		opacity: 0;
		transform: rotate(-200deg);
	}
	100% {
		opacity: 1;
		transform: rotate(0);
	}
}


/*转出*/

.rotateout {
	-webkit-animation-name: a-rotateout;
	-moz-animation-name: a-rotateout;
	-ms-animation-name: a-rotateout;
	animation-name: a-rotateout;
}

@-webkit-keyframes a-rotateout {
	0% {
		-webkit-transform-origin: center center;
		-webkit-transform: rotate(0);
		opacity: 1;
	}
	100% {
		-webkit-transform-origin: center center;
		-webkit-transform: rotate(200deg);
		opacity: 0;
	}
}

@-moz-keyframes a-rotateout {
	0% {
		-moz-transform-origin: center center;
		-moz-transform: rotate(0);
		opacity: 1;
	}
	100% {
		-moz-transform-origin: center center;
		-moz-transform: rotate(200deg);
		opacity: 0;
	}
}

@-ms-keyframes a-rotateout {
	0% {
		-ms-transform-origin: center center;
		-ms-transform: rotate(0);
		opacity: 1;
	}
	100% {
		-ms-transform-origin: center center;
		-ms-transform: rotate(200deg);
		opacity: 0;
	}
}

@keyframes a-rotateout {
	0% {
		transform-origin: center center;
		transform: rotate(0);
		opacity: 1;
	}
	100% {
		transform-origin: center center;
		transform: rotate(200deg);
		opacity: 0;
	}
}


/*闪烁*/

.flash,
.flash-hover:hover {
	-webkit-animation-name: a-flash;
	-moz-animation-name: a-flash;
	-ms-animation-name: a-flash;
	animation-name: a-flash;
}

@-webkit-keyframes a-flash {
	0%,
	50%,
	100% {
		opacity: 1;
	}
	25%,
	75% {
		opacity: 0;
	}
}

@-moz-keyframes a-flash {
	0%,
	50%,
	100% {
		opacity: 1;
	}
	25%,
	75% {
		opacity: 0;
	}
}

@-ms-keyframes a-flash {
	0%,
	50%,
	100% {
		opacity: 1;
	}
	25%,
	75% {
		opacity: 0;
	}
}

@keyframes a-flash {
	0%,
	50%,
	100% {
		opacity: 1;
	}
	25%,
	75% {
		opacity: 0;
	}
}


/*震颤*/

.shake,
.shake-hover:hover {
	-webkit-animation-name: a-shake;
	-moz-animation-name: a-shake;
	-ms-animation-name: a-shake;
	animation-name: a-shake;
}

@-webkit-keyframes a-shake {
	0%,
	100% {
		-webkit-transform: translateX(0);
	}
	10%,
	30%,
	50%,
	70%,
	90% {
		-webkit-transform: translateX(-10px);
	}
	20%,
	40%,
	60%,
	80% {
		-webkit-transform: translateX(10px);
	}
}

@-moz-keyframes a-shake {
	0%,
	100% {
		-moz-transform: translateX(0);
	}
	10%,
	30%,
	50%,
	70%,
	90% {
		-moz-transform: translateX(-10px);
	}
	20%,
	40%,
	60%,
	80% {
		-moz-transform: translateX(10px);
	}
}

@-ms-keyframes a-shake {
	0%,
	100% {
		-ms-transform: translateX(0);
	}
	10%,
	30%,
	50%,
	70%,
	90% {
		-ms-transform: translateX(-10px);
	}
	20%,
	40%,
	60%,
	80% {
		-ms-transform: translateX(10px);
	}
}

@keyframes a-shake {
	0%,
	100% {
		transform: translateX(0);
	}
	10%,
	30%,
	50%,
	70%,
	90% {
		transform: translateX(-10px);
	}
	20%,
	40%,
	60%,
	80% {
		transform: translateX(10px);
	}
}


/*摇摆*/

.swing,
.swing-hover:hover {
	-webkit-animation-name: a-swing;
	-moz-animation-name: a-swing;
	-ms-animation-name: a-swing;
	animation-name: a-swing;
}

@-webkit-keyframes a-swing {
	20% {
		-webkit-transform: rotate(15deg);
	}
	40% {
		-webkit-transform: rotate(-10deg);
	}
	60% {
		-webkit-transform: rotate(5deg);
	}
	80% {
		-webkit-transform: rotate(-5deg);
	}
	100% {
		-webkit-transform: rotate(0);
	}
}

@-moz-keyframes a-swing {
	20% {
		-moz-transform: rotate(15deg);
	}
	40% {
		-moz-transform: rotate(-10deg);
	}
	60% {
		-moz-transform: rotate(5deg);
	}
	80% {
		-moz-transform: rotate(-5deg);
	}
	100% {
		-moz-transform: rotate(0);
	}
}

@-ms-keyframes a-swing {
	20% {
		-ms-transform: rotate(15deg);
	}
	40% {
		-ms-transform: rotate(-10deg);
	}
	60% {
		-ms-transform: rotate(5deg);
	}
	80% {
		-ms-transform: rotate(-5deg);
	}
	100% {
		-ms-transform: rotate(0);
	}
}

@keyframes a-swing {
	20% {
		transform: rotate(15deg);
	}
	40% {
		transform: rotate(-10deg);
	}
	60% {
		transform: rotate(5deg);
	}
	80% {
		transform: rotate(-5deg);
	}
	100% {
		transform: rotate(0);
	}
}


/*摇晃*/

.wobble,
.wobble-hover:hover {
	-webkit-animation-name: a-wobble;
	-moz-animation-name: a-wobble;
	-ms-animation-name: a-wobble;
	animation-name: a-wobble;
}

@-webkit-keyframes a-wobble {
	0% {
		-webkit-transform: translateX(0);
	}
	15% {
		-webkit-transform: translateX(-50px) rotate(-5deg);
	}
	30% {
		-webkit-transform: translateX(40px) rotate(3deg);
	}
	45% {
		-webkit-transform: translateX(-33px) rotate(-3deg);
	}
	60% {
		-webkit-transform: translateX(10px) rotate(2deg);
	}
	75% {
		-webkit-transform: translateX(-10px) rotate(-1deg);
	}
	100% {
		-webkit-transform: translateX(0);
	}
}

@-moz-keyframes a-wobble {
	0% {
		-moz-transform: translateX(0);
	}
	15% {
		-moz-transform: translateX(-50px) rotate(-5deg);
	}
	30% {
		-moz-transform: translateX(40px) rotate(3deg);
	}
	45% {
		-moz-transform: translateX(-33px) rotate(-3deg);
	}
	60% {
		-moz-transform: translateX(10px) rotate(2deg);
	}
	75% {
		-moz-transform: translateX(-10px) rotate(-1deg);
	}
	100% {
		-moz-transform: translateX(0);
	}
}

@-ms-keyframes a-wobble {
	0% {
		-ms-transform: translateX(0);
	}
	15% {
		-ms-transform: translateX(-50px) rotate(-5deg);
	}
	30% {
		-ms-transform: translateX(40px) rotate(3deg);
	}
	45% {
		-ms-transform: translateX(-33px) rotate(-3deg);
	}
	60% {
		-ms-transform: translateX(10px) rotate(2deg);
	}
	75% {
		-ms-transform: translateX(-10px) rotate(-1deg);
	}
	100% {
		-ms-transform: translateX(0);
	}
}

@keyframes a-wobble {
	0% {
		transform: translateX(0);
	}
	15% {
		transform: translateX(-50px) rotate(-5deg);
	}
	30% {
		transform: translateX(40px) rotate(3deg);
	}
	45% {
		transform: translateX(-33px) rotate(-3deg);
	}
	60% {
		transform: translateX(10px) rotate(2deg);
	}
	75% {
		transform: translateX(-10px) rotate(-1deg);
	}
	100% {
		transform: translateX(0);
	}
}


/*震铃*/

.ring,
.ring-hover:hover {
	-webkit-animation-name: a-ring;
	-moz-animation-name: a-ring;
	-ms-animation-name: a-ring;
	animation-name: a-ring;
}

@-webkit-keyframes a-ring {
	0% {
		-webkit-transform: scale(1);
	}
	10%,
	20% {
		-webkit-transform: scale(0.9) rotate(-3deg);
	}
	30%,
	50%,
	70%,
	90% {
		-webkit-transform: scale(1.1) rotate(3deg);
	}
	40%,
	60%,
	80% {
		-webkit-transform: scale(1.1) rotate(-3deg);
	}
	100% {
		-webkit-transform: scale(1) rotate(0);
	}
}

@-moz-keyframes a-ring {
	0% {
		-moz-transform: scale(1);
	}
	10%,
	20% {
		-moz-transform: scale(0.9) rotate(-3deg);
	}
	30%,
	50%,
	70%,
	90% {
		-moz-transform: scale(1.1) rotate(3deg);
	}
	40%,
	60%,
	80% {
		-moz-transform: scale(1.1) rotate(-3deg);
	}
	100% {
		-moz-transform: scale(1) rotate(0);
	}
}

@-ms-keyframes a-ring {
	0% {
		-ms-transform: scale(1);
	}
	10%,
	20% {
		-ms-transform: scale(0.9) rotate(-3deg);
	}
	30%,
	50%,
	70%,
	90% {
		-ms-transform: scale(1.1) rotate(3deg);
	}
	40%,
	60%,
	80% {
		-ms-transform: scale(1.1) rotate(-3deg);
	}
	100% {
		-ms-transform: scale(1) rotate(0);
	}
}

@keyframes a-ring {
	0% {
		transform: scale(1);
	}
	10%,
	20% {
		transform: scale(0.9) rotate(-3deg);
	}
	30%,
	50%,
	70%,
	90% {
		transform: scale(1.1) rotate(3deg);
	}
	40%,
	60%,
	80% {
		transform: scale(1.1) rotate(-3deg);
	}
	100% {
		transform: scale(1) rotate(0);
	}
}


/*旋转*/

.rotate,
.rotate-hover:hover {
	-webkit-animation-name: a-rotate;
	-moz-animation-name: a-rotate;
	-ms-animation-name: a-rotate;
	animation-name: a-rotate;
}

@-webkit-keyframes a-rotate {
	0% {
		-webkit-transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(359deg);
	}
}

@-moz-keyframes a-rotate {
	0% {
		-moz-transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(359deg);
	}
}

@-ms-keyframes a-rotate {
	0% {
		-ms-transform: rotate(0deg);
	}
	100% {
		-ms-transform: rotate(359deg);
	}
}

@keyframes a-rotate {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(359deg);
	}
}


/*不变文本*/

.text-black,
a.text-black:link,
a.text-black:visited,
.button.border-black,
blockquote.border-black strong,
.pager.border-black a,
.pager-prev.border-black,
.pager-next.border-black {
	color: #000;
}

a.text-black:hover {
	color: #666;
}

.text-gray,
a.text-gray:link,
a.text-gray:visited,
.button.border-gray,
blockquote.border-gray strong,
.pager.border-gray a,
.pager-prev.border-gray,
.pager-next.border-gray {
	color: #999;
}

.text-white,
a.text-white:link,
a.text-white:visited,
.button.border-white,
blockquote.border-white,
.pager.border-white a,
.pager-prev.border-white,
.pager-next.border-white {
	color: #fff;
}

.text-red,
a.text-red:link,
a.text-red:visited,
.button.border-red,
.button.bg-red-light,
blockquote.border-red strong,
.pager.border-red a,
.pager-prev.border-red,
.pager-next.border-red,
.badge.bg-red-light,
.alert-red,
.check-error {
	color: #e33;
}

.text-yellow,
a.text-yellow:link,
a.text-yellow:visited,
.button.border-yellow,
.button.bg-yellow-light,
blockquote.border-yellow strong,
.pager.border-yellow a,
.pager-prev.border-yellow,
.pager-next.border-yellow,
.badge.bg-yellow-light,
.alert-yellow,
.check-warning {
	color: #f60;
}

.text-blue,
a.text-blue:link,
a.text-blue:visited,
.button.border-blue,
.button.bg-blue-light,
blockquote.border-blue strong,
.pager.border-blue a,
.pager-prev.border-blue,
.pager-next.border-blue,
.badge.bg-blue-light,
.alert-blue {
	color: #0ae;
}

.text-green,
a.text-green:link,
a.text-green:visited,
.button.border-green,
.button.bg-green-light,
blockquote.border-green strong,
.pager.border-green a,
.pager-prev.border-green,
.pager-next.border-green,
.badge.bg-green-light,
.alert-green,
.check-success {
	color: #2c7;
}

.text-red-light,
a.text-red-light:link,
a.text-red-light:visited,
.button.border-red-light,
blockquote.border-red-light strong,
.pager.border-red-light a {
	color: #fdc;
}

.text-yellow-light,
a.text-yellow-light:link,
a.text-yellow-light:visited,
.button.border-yellow-light,
blockquote.border-yellow-light strong,
.pager.border-yellow-light a,
.pager-prev.border-yellow-light,
.pager-next.border-yellow-light {
	color: #fec;
}

.text-blue-light,
a.text-blue-light:link,
a.text-blue-light:visited,
.button.border-blue-light,
blockquote.border-blue-light strong,
.pager.border-blue-light a,
.pager-prev.border-blue-light,
.pager-next.border-blue-light {
	color: #def;
}

.text-green-light,
a.text-green-light:link,
a.text-green-light:visited,
.button.border-green-light,
blockquote.border-green-light strong,
.pager.border-green-light a,
.pager-prev.border-green-light,
.pager-next.border-green-light {
	color: #ded;
}


/*颜色重设*/

.bg-inverse,
.bg-inverse a {
	color: #fff;
}

a.text-white:hover,
.bg-inverse a:hover {
	color: #ddd;
}


/*不变背景*/

.bg,
.table .current,
.table .current td,
.table .current th,
.button.active,
.pointer.border .active,
.nav-menu ul a:hover,
.nav-menu.nav-pills .active ul a:hover,
.bg-inverse .nav.nav-menu ul a:hover,
.bg-inverse .nav.nav-menu .active ul a:hover,
.bg-inverse .nav.nav-menu.nav-tabs ul a:hover,
.bg-inverse .nav.nav-menu.nav-pills ul a:hover,
.bg-inverse .nav-menu.nav-inline.nav-big ul a:hover,
.navbar-body .nav ul a:hover {
	background-color: #f5f5f5;
}

.bg-black,
.border-black .button.active,
.pointer.border-black .active,
.nav-pills.border-black .active a,
.nav-main.border-black .nav-head,
.pagination.border-black .active {
	background-color: #000;
}

.bg-gray,
.border-gray .button.active,
.pointer.border-gray .active,
.nav-pills.border-gray .active a,
.nav-main.border-gray .nav-head,
.pagination.border-gray .active {
	background-color: #999;
}

.bg-white,
.button.bg,
.border-white .button.active,
.pointer.border-white .active,
.nav-pills.border-white .active a,
.nav-main.border-white .nav-head,
.pagination.border-white .active {
	background-color: #fff;
}


/*红*/

.bg-red,
.border-red .button.active,
.pointer.border-red .active,
.nav-pills.border-red .active a,
.nav-main.border-red .nav-head,
.pagination.border-red .active {
	background-color: #e33;
}

.bg-yellow,
.border-yellow .button.active,
.pointer.border-yellow .active,
.nav-pills.border-yellow .active a,
.nav-main.border-yellow .nav-head,
.pagination.border-yellow .active {
	background-color: #f60;
}

.bg-blue,
.border-blue .button.active,
.pointer.border-blue .active,
.nav-pills.border-blue .active a,
.nav-main.border-blue .nav-head,
.pagination.border-blue .active {
	background-color: #0ae;
}

.bg-green,
.border-green .button.active,
.pointer.border-green .active,
.nav-pills.border-green .active a,
.pagination.border-green .active {
	background-color: #2c7;
}

.bg-red-light,
.table .red,
.table .red td,
.table .red th,
.alert-red,
.border-red-light .button.active,
.pointer.border-red-light .active,
.nav-pills.border-red-light .active a,
.nav-main.border-red-light .nav-head,
.pagination.border-red-light .active {
	background-color: #fee;
}

.bg-yellow-light,
.table .yellow,
.table .yellow td,
.table .yellow th,
.alert-yellow,
.border-yellow-light .button.active,
.pointer.border-yellow-light .active,
.nav-pills.border-yellow-light .active a,
.nav-main.border-yellow-light .nav-head,
.pagination.border-yellow-light .active {
	background-color: #ffd;
}

.bg-blue-light,
.table .blue,
.table .blue td,
.table .blue th,
.alert-blue,
.border-blue-light .button.active,
.pointer.border-blue-light .active,
.nav-pills.border-blue-light .active a,
.nav-main.border-blue-light .nav-head,
.pagination.border-blue-light .active {
	background-color: #eff;
}

.bg-green-light,
.table .green,
.table .green td,
.table .green th,
.alert-green,
.border-green-light .button.active,
.pointer.border-green-light .active,
.nav-pills.border-green-light .active a,
.nav-main.border-green-light .nav-head,
.pagination.border-green-light .active {
	background-color: #efd;
}


/*不变边框*/

.border-dashed {
	border-style: dashed;
}

.border-dotted {
	border-style: dotted;
}

.border-double {
	border-style: double;
}

.border-inset {
	border-style: inset;
}

.border-outset {
	border-style: outset;
}

.border-black,
.border-black .button,
.border-black .tab-nav li a,
.border-black .tab-body,
.button.bg-black,
.selected.border-black,
.pointer.border-black li,
.nav.border-black .active a,
.nav.nav-tabs.border-black,
.nav-main.border-black a,
.nav-main.border-black .nav-head,
.pagination.border-black li,
.pager.border-black a {
	border-color: #000;
}

.border-gray,
.border-gray .button,
.border-gray .tab-nav li a,
.border-gray .tab-body,
.button.bg-gray,
.selected.border-gray,
.pointer.border-gray li,
.nav.border-gray .active a,
.nav.nav-tabs.border-gray,
.nav-main.border-gray a,
.nav-main.border-gray .nav-head,
.pagination.border-gray li,
.pager.border-gray a {
	border-color: #999;
}

.border-white,
.border-white .button,
.border-white .tab-nav li a,
.border-white .tab-body,
.button.bg-white,
.selected.border-white,
.pointer.border-white li,
.nav.border-white .active a,
.nav.nav-tabs.border-white,
.nav-main.border-white a,
.nav-main.border-white .nav-head,
.pagination.border-white li,
.pager.border-white a {
	border-color: #fff;
}

.border-red,
.border-red .button,
.border-red .tab-nav li a,
.border-red .tab-body,
.button.bg-red,
.selected.border-red,
.pointer.border-red li,
.check-error .input,
.nav.border-red .active a,
.nav.nav-tabs.border-red,
.nav-main.border-red a,
.nav-main.border-red .nav-head,
.pagination.border-red li,
.pager.border-red a {
	border-color: #e33;
}

.border-yellow,
.border-yellow .button,
.border-yellow .tab-nav li a,
.border-yellow .tab-body,
.button.bg-yellow,
.selected.border-yellow,
.pointer.border-yellow li,
.check-warning .input,
.nav.border-yellow .active a,
.nav.nav-tabs.border-yellow,
.nav-main.border-yellow a,
.nav-main.border-yellow .nav-head,
.pagination.border-yellow li,
.pager.border-yellow a {
	border-color: #f60;
}

.border-blue,
.border-blue .button,
.border-blue .tab-nav li a,
.border-blue .tab-body,
.button.bg-blue,
.selected.border-blue,
.pointer.border-blue li,
.nav.border-blue .active a,
.nav.nav-tabs.border-blue,
.nav-main.border-blue a,
.nav-main.border-blue .nav-head,
.pagination.border-blue li,
.pager.border-blue a {
	border-color: #0ae;
}

.border-green,
.border-green .button,
.border-green .tab-nav li a,
.border-green .tab-body,
.button.bg-green,
.selected.border-green,
.pointer.border-green li,
.check-success .input,
.nav.border-green .active a,
.nav.nav-tabs.border-green,
.nav-main.border-green a,
.nav-main.border-green .nav-head,
.pagination.border-green li,
.pager.border-green a {
	border-color: #2c7;
}

.border-red-light,
.border-red-light .button,
.border-red-light .tab-nav li a,
.border-red-light .tab-body,
.button.bg-red-light,
.selected.border-red-light,
.alert-red,
.pointer.border-red-light li,
.nav.border-red-light .active a,
.nav.nav-tabs.border-red-light,
.nav-main.border-red-light a,
.nav-main.border-red-light .nav-head,
.pagination.border-red-light li,
.pager.border-red-light a {
	border-color: #fee;
}

.border-yellow-light,
.border-yellow-light .button,
.border-yellow-light .tab-nav li a,
.border-yellow-light .tab-body,
.button.bg-yellow-light,
.selected.border-yellow-light,
.alert-yellow,
.pointer.border-yellow-light li,
.nav.border-yellow-light .active a,
.nav.nav-tabs.border-yellow-light,
.nav-main.border-yellow-light a,
.nav-main.border-yellow-light .nav-head,
.pagination.border-yellow-light li,
.pager.border-yellow-light a {
	border-color: #ffd;
}

.border-blue-light,
.border-blue-light .button,
.border-blue-light .tab-nav li a,
.border-blue-light .tab-body,
.button.bg-blue-light,
.selected.border-blue-light,
.alert-blue,
.pointer.border-blue-light li,
.nav.border-blue-light .active a,
.nav.nav-tabs.border-blue-light,
.nav-main.border-blue-light a,
.nav-main.border-blue-light .nav-head,
.pagination.border-blue-light li,
.pager.border-blue-light a {
	border-color: #eff;
}

.border-green-light,
.border-green-light .button,
.border-green-light .tab-nav li a,
.border-green-light .tab-body,
.button.bg-green-light,
.selected.border-green-light,
.alert-green,
.pointer.border-green-light li,
.nav.border-green-light .active a,
.nav.nav-tabs.border-green-light,
.nav-main.border-green-light a,
.nav-main.border-green-light .nav-head,
.pagination.border-green-light li,
.pager.border-green-light a {
	border-color: #efd;
}


/*悬浮背景*/

.button:hover,
.button:focus,
.button.bg:hover,
.button.bg:focus {
	background-color: #f5f5f5;
}

.button.border-black:hover,
.button.border-black:focus,
.button.bg-black:hover,
.button.bg-black:focus {
	color: #fff;
	border-color: #666;
	background-color: #666;
}

.button.border-gray:hover,
.button.border-gray:focus,
.button.bg-gray:hover,
.button.bg-gray:focus {
	color: #fff;
	border-color: #aaa;
	background-color: #aaa;
}

.button.border-white:hover,
.button.border-white:focus,
.button.bg-white:hover,
.button.bg-white:focus {
	color: #333;
	border-color: #f5f5f5;
	background-color: #f5f5f5;
}

.button.border-red:hover,
.button.border-red:focus,
.button.bg-red:hover,
.button.bg-red:focus {
	color: #fff;
	border-color: #f00;
	background-color: #f00;
}

.button.border-yellow:hover,
.button.border-yellow:focus,
.button.bg-yellow:hover,
.button.bg-yellow:focus {
	color: #fff;
	border-color: #f90;
	background-color: #f90;
}

.button.border-blue:hover,
.button.border-blue:focus,
.button.bg-blue:hover,
.button.bg-blue:focus {
	color: #fff;
	border-color: #3bd;
	background-color: #3bd;
}

.button.border-green:hover,
.button.border-green:focus,
.button.bg-green:hover,
.button.bg-green:focus {
	color: #fff;
	border-color: #5d8;
	background-color: #5d8;
}

.button.border-red-light:hover,
.button.border-red-light:focus,
.button.bg-red-light:hover,
.button.bg-red-light:focus,
.alert-red:hover {
	color: #e33;
	border-color: #fdc;
	background-color: #fdc;
}

.button.border-yellow-light:hover,
.button.border-yellow-light:focus,
.button.bg-yellow-light:hover,
.button.bg-yellow-light:focus,
.alert-yellow:hover {
	color: #f60;
	border-color: #fec;
	background-color: #fec;
}

.button.border-blue-light:hover,
.button.border-blue-light:focus,
.button.bg-blue-light:hover,
.button.bg-blue-light:focus,
.alert-blue:hover {
	color: #0ae;
	border-color: #def;
	background-color: #def;
}

.button.border-green-light:hover,
.button.border-green-light:focus,
.button.bg-green-light:hover,
.button.bg-green-light:focus,
.alert-green:hover {
	color: #2c7;
	border-color: #cfa;
	background-color: #cfa;
}

.sliders_left,
.sliders_right {
	opacity: 0;
	-webkit-transition: opacity, background-color .2s ease;
	width: 84px;
	height: 100%;
	position: fixed;
	top: 0;
	pointer-events: none
}

.sliders_left {
	left: 1px;
	background: url(data:image/png;base64,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) center no-repeat;
}

.sliders_right {
	right: 0px;
	background: url(data:image/png;base64,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) center no-repeat;
}

.sliders_left.actived,
.sliders_right.actived {
	cursor: pointer;
	opacity: 1;
	pointer-events: auto
}

.sliders_left:hover {
	background-image: url(data:image/png;base64,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);
	background-color: rgba(0, 0, 0, .06);
}

.sliders_right:hover {
	background-image: url(data:image/png;base64,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);
	background-color: rgba(0, 0, 0, .06);
}


/*左右悬浮*/


/*气泡对话*/

.popo {
	width: 100%;
}

.popo .ico-left {
	float: left;
	margin-top: 10px;
}

.popo .ico-right {
	float: right;
	margin-top: 10px;
}

.popo .popo-left {
	clear: both;
	float: left;
}

.popo .popo-right {
	clear: both;
	float: right;
}

.popo .popo-body {
	margin: 10px 0;
	padding: 8px;
	table-layout: fixed;
	word-break: break-all;
	position: relative;
	background: -webkit-gradient( linear, 50% 0%, 50% 100%, from(#ffffff), color-stop(0.1, #ececec), color-stop(0.5, #dbdbdb), color-stop(0.9, #dcdcdc), to(#8c8c8c));
	border: solid 1px #ddd;
	background-color: #f5f5f5;
}

.popo .popo-body:before {
	border: 10px solid;
}

.popo .popo-body:after {
	border: 8px solid;
}

.popo .popo-body.left {
	margin-left: 10px;
	width: 75%;
	float: left;
	background: -webkit-gradient( linear, 50% 0%, 50% 100%, from(#ffffff), color-stop(0.1, #eae8e8), color-stop(0.4, #E3E3E3), color-stop(0.8, #DFDFDF), to(#D9D9D9));
}

.popo .popo-body.left:before {
	content: '';
	position: absolute;
	width: 0;
	height: 0;
	top: 9px;
	bottom: auto;
	left: -10px;
	border-width: 9px 10px 9px 0;
	border-color: transparent #ddd;
}

.popo .popo-body.left:after {
	content: '';
	position: absolute;
	width: 0;
	height: 0;
	top: 10px;
	bottom: auto;
	left: -8px;
	border-width: 8px 9px 8px 0;
	border-color: transparent #F5F5F5;
}

.popo .popo-body.right {
	margin-right: 10px;
	width: 75%;
	float: right;
	background: -webkit-gradient( linear, 50% 0%, 50% 100%, from(#e4ffa7), color-stop(0.1, #bced50), color-stop(0.4, #aed943), color-stop(0.8, #a7d143), to(#99BF40));
}

.popo .popo-body.right:before {
	content: '';
	position: absolute;
	width: 0;
	height: 0;
	top: 9px;
	bottom: auto;
	left: auto;
	right: -10px;
	border-width: 9px 0 9px 10px;
	border-color: transparent #ddd;
}

.popo .popo-body.right:after {
	content: '';
	position: absolute;
	width: 0;
	height: 0;
	top: 10px;
	bottom: auto;
	left: auto;
	right: -8px;
	border-width: 8px 0 8px 9px;
	border-color: transparent #F5F5F5;
}


/*--------自定义气泡风格--------*/


/*橙色*/

.popo .popo-yellow {
	border: solid 1px #ffd;
	background-color: #ffd;
	color: #f60;
}

.popo .popo-yellow.left:before {
	border-color: transparent #ffd;
}

.popo .popo-yellow.left:after {
	border-color: transparent #ffd;
}

.popo .popo-yellow.right:before {
	border-color: transparent #ffd;
}

.popo .popo-yellow.right:after {
	border-color: transparent #ffd;
}


/*蓝色*/

.popo .popo-blue {
	border: solid 1px #eff;
	background-color: #eff;
	color: #0ae;
}

.popo .popo-blue.left:before {
	border-color: transparent #eff;
}

.popo .popo-blue.left:after {
	border-color: transparent #eff;
}

.popo .popo-blue.right:before {
	border-color: transparent #eff;
}

.popo .popo-blue.right:after {
	border-color: transparent #eff;
}


/*蓝色*/

.popo .popo-green {
	border: solid 1px #efd;
	background-color: #efd;
	color: #2c7;
}

.popo .popo-green.left:before {
	border-color: transparent #efd;
}

.popo .popo-green.left:after {
	border-color: transparent #efd;
}

.popo .popo-green.right:before {
	border-color: transparent #efd;
}

.popo .popo-green.right:after {
	border-color: transparent #efd;
}


/*--------自定义链接颜色(可选)--------*/

a {
	color: #333;
	text-decoration: none;
}


/*链接-颜色*/

a:focus,
a:hover {
	color: #0a8;
}


/*链接-悬浮颜色*/


/*--------自定义文本颜色--------*/

.text-main,
a.text-main:link,
a.text-main:visited,
.button.border-main,
blockquote.border-main strong,
.pager.border-main a,
.pager-prev.border-main,
.pager-next.border-main,
.nav a:hover,
.nav-menu.nav-pills .active ul a:hover,
.bg-inverse .nav-menu ul a:hover,
.bg-inverse .nav.nav-menu.nav-tabs ul a:hover,
.bg-inverse .nav.nav-menu.nav-tabs .active ul a:hover,
.bg-inverse .nav.nav-menu.nav-pills ul a:hover,
.bg-inverse .nav.nav-menu.nav-pills .active ul a:hover {
	color: #0a8;
}


/*文本-主色*/

.text-sub,
a.text-sub:link,
a.text-sub:visited,
.button.border-sub,
blockquote.border-sub strong,
.pager.border-sub a,
.pager-prev.border-sub,
.pager-next.border-sub {
	color: #0ae;
}


/*文本-辅色*/

.text-back,
a.text-back:link,
a.text-back:visited,
.button.border-back,
blockquote.border-back,
.pager.border-back a,
.pager-prev.border-back,
.pager-next.border-back {
	color: #efe;
}


/*文本-背景色*/

.text-mix,
a.text-mix:link,
a.text-mix:visited,
.button.border-mix,
blockquote.border-mix,
.pager.border-mix a,
.pager-prev.border-mix,
.pager-next.border-mix {
	color: #aed;
}


/*文本-融合色*/

.text-dot,
a.text-dot:link,
a.text-dot:visited,
.button.border-dot,
blockquote.border-dot strong,
.pager.border-dot a,
.pager-prev.border-dot,
.pager-next.border-dot {
	color: #e33;
}


/*文本-点缀色*/


/*--------自定义背景色--------*/

.bg-main,
.border-main .button.active,
.pointer.border-main .active,
.nav-pills.border-main .active a,
.nav-main.border-main .nav-head,
.pagination.border-main .active {
	background-color: #0a8;
}


/*背景-主色*/

.bg-sub,
.border-sub .button.active,
.pointer.border-sub .active,
.nav-pills.border-sub .active a,
.nav-main.border-sub .nav-head,
.pagination.border-sub .active {
	background-color: #0ae;
}


/*背景-辅色*/

.bg-back,
.border-back .button.active,
.pointer.border-back .active,
.nav-pills.border-back .active a,
.nav-main.border-back .nav-head,
.pagination.border-back .active {
	background-color: #efe;
}


/*背景-背景色*/

.bg-mix,
.border-mix .button.active,
.pointer.border-mix .active,
.nav-pills.border-mix .active a,
.pagination.border-mix .active {
	background-color: #aed;
}


/*背景-融合色*/

.bg-dot,
.border-dot .button.active,
.pointer.border-dot .active,
.nav-pills.border-dot .active a,
.nav-main.border-dot .nav-head,
.pagination.border-dot .active {
	background-color: #e33;
}


/*背景-点缀色*/


/*--------自定义边框色--------*/

.border-main,
.border-main .button,
.border-main .tab-nav li a,
.border-main .tab-body,
.button.bg-main,
.selected.border-main,
.pointer.border-main li,
.nav.border-main .active a,
.nav.nav-tabs.border-main,
.nav-main.border-main a,
.nav-main.border-main .nav-head,
.pagination.border-main li,
.pager.border-main a {
	border-color: #0a8;
}


/*边框-主色*/

.border-sub,
.border-sub .button,
.border-sub .tab-nav li a,
.border-sub .tab-body,
.button.bg-sub,
.selected.border-sub,
.pointer.border-sub li,
.nav.border-sub .active a,
.nav.nav-tabs.border-sub,
.nav-main.border-sub a,
.nav-main.border-sub .nav-head,
.pagination.border-sub li,
.pager.border-sub a {
	border-color: #0ae;
}


/*边框-辅色*/

.border-back,
.border-back .button,
.border-back .tab-nav li a,
.border-back .tab-body,
.button.bg-back,
.selected.border-back,
.pointer.border-back li,
.nav.border-back .active a,
.nav.nav-tabs.border-back,
.nav-main.border-back a,
.nav-main.border-back .nav-head,
.pagination.border-back li,
.pager.border-back a {
	border-color: #efe;
}


/*边框-背景色*/

.border-mix,
.border-mix .button,
.border-mix .tab-nav li a,
.border-mix .tab-body,
.button.bg-mix,
.selected.border-mix,
.pointer.border-mix li,
.nav.border-mix .active a,
.nav.nav-tabs.border-mix,
.nav-main.border-mix a,
.nav-main.border-mix .nav-head,
.pagination.border-mix li,
.pager.border-mix a {
	border-color: #aed;
}


/*边框-融合色*/

.border-dot,
.border-dot .button,
.border-dot .tab-nav li a,
.border-dot .tab-body,
.button.bg-dot,
.selected.border-dot,
.pointer.border-dot li,
.nav.border-dot .active a,
.nav.nav-tabs.border-dot,
.nav-main.border-dot a,
.nav-main.border-dot .nav-head,
.pagination.border-dot li,
.pager.border-dot a {
	border-color: #e33;
}


/*边框-点缀色*/


/*--------自定义按钮悬浮文本、边框及背景色--------*/

.button.border-main:hover,
.button.border-main:focus,
.button.bg-main:hover,
.button.bg-main:focus {
	color: #fff;
	border-color: #0ab;
	background-color: #0ab;
}


/*主色-文本-边框-背景*/

.button.border-sub:hover,
.button.border-sub:focus,
.button.bg-sub:hover,
.button.bg-sub:focus {
	color: #fff;
	border-color: #09f;
	background-color: #09f;
}


/*配色-文本-边框-背景*/

.button.border-back:hover,
.button.border-back:focus,
.button.bg-back:hover,
.button.bg-back:focus {
	color: #333;
	border-color: #cec;
	background-color: #cec;
}


/*背景色-文本-边框-背景*/

.button.border-mix:hover,
.button.border-mix:focus,
.button.bg-mix:hover,
.button.bg-mix:focus {
	color: #333;
	border-color: #cec;
	background-color: #cec;
}


/*融合-文本色-边框-背景*/

.button.border-dot:hover,
.button.border-dot:focus,
.button.bg-dot:hover,
.button.bg-dot:focus {
	color: #fff;
	border-color: #f00;
	background-color: #f00;
}


/*点缀色-文本-边框-背景*/

.waterfall {}

.waterfall ul {
	-webkit-column-width: 160px;
	-moz-column-width: 160px;
	-o-colum-width: 160px;
	column-width: 160px;
	-webkit-column-gap: 1px;
	-moz-column-gap: 1px;
	-o-column-gap: 1px;
	column-gap: 1px;
}

.waterfall li {
	display: inline-block;
	margin: 5px 0;
}

.waterfall li img {
	display: inline-block;
	width: 100%;
}


/*瀑布流,使用到的需要调整宽度*/
</style>
</head>

<body>
<div class="container" style=" margin-top:8%;"> 
   <div class="panel margin-big-top">
      <div class="text-center">
         <br>
         <h2 class="padding-top"> <stong>404错误！抱歉您要找的页面不存在</stong> </h2>
         <div class=""> 
            <div class="float-left">
                <img src="/images/errors/ds-1.gif">
                <div class="alert"> 卧槽！页面不见了！ </div>
            </div>
            <div class="float-right">
               <img src="/images/errors/ds-2.png" width="260"> 
            </div>
          </div>
          <div class="padding-big">
               <a href="/" class="button bg-yellow">返回首页</a>
               <a href="#" style="margin-top: 1rem;" onclick="alert('那你想多了');" class="button">打死张贤健</a>
          </div> 
      </div> 
   </div> 
</div>
</body>
</html>
