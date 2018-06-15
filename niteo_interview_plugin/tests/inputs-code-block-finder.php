<?php

$test1 = array("```t3st
test
```

this is just text
here comes the code

```test
more code
```
",
'<pre class="t3st" style="font-family:monospace;">
test
</pre>

this is just text
here comes the code

<pre class="test" style="font-family:monospace;">
more code
</pre>');

$test2 = array('```python```', '<pre class="python" style="font-family:monospace;"></pre>');

$test3 = array(
'some text
```javascript
var myFunc = () => {
  // do something
  var c;
    
  {let a, b;
  c = a + b;}

  var d;
  let e;
}
```

more text

``` javascript
for (var i = 0; i < 5; i++) {
  setTimeout(() => {
    console.log(i);
  }, 100);
}
```

final text',
'some text
<pre class="javascript" style="font-family:monospace;">
<span style="color: #000066; font-weight: bold;">var</span> myFunc <span style="color: #339933;">=</span> <span style="color: #009900;">&#40;</span><span style="color: #009900;">&#41;</span> <span style="color: #339933;">=&gt;</span> <span style="color: #009900;">&#123;</span>
  <span style="color: #006600; font-style: italic;">// do something</span>
  <span style="color: #000066; font-weight: bold;">var</span> c<span style="color: #339933;">;</span>

  <span style="color: #009900;">&#123;</span>let a<span style="color: #339933;">,</span> b<span style="color: #339933;">;</span>
  c <span style="color: #339933;">=</span> a <span style="color: #339933;">+</span> b<span style="color: #339933;">;</span><span style="color: #009900;">&#125;</span>

  <span style="color: #000066; font-weight: bold;">var</span> d<span style="color: #339933;">;</span>
  let e<span style="color: #339933;">;</span>
<span style="color: #009900;">&#125;</span>
</pre>

more text

<pre class="javascript" style="font-family:monospace;">
<span style="color: #000066; font-weight: bold;">for</span> <span style="color: #009900;">&#40;</span><span style="color: #000066; font-weight: bold;">var</span> i <span style="color: #339933;">=</span> <span style="color: #CC0000;">0</span><span style="color: #339933;">;</span> i <span style="color: #339933;">&lt;</span> <span style="color: #CC0000;">5</span><span style="color: #339933;">;</span> i<span style="color: #339933;">++</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span>
  setTimeout<span style="color: #009900;">&#40;</span><span style="color: #009900;">&#40;</span><span style="color: #009900;">&#41;</span> <span style="color: #339933;">=&gt;</span> <span style="color: #009900;">&#123;</span>
    console.<span style="color: #660066;">log</span><span style="color: #009900;">&#40;</span>i<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
  <span style="color: #009900;">&#125;</span><span style="color: #339933;">,</span> <span style="color: #CC0000;">100</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<span style="color: #009900;">&#125;</span>
</pre>

final text');

?>
