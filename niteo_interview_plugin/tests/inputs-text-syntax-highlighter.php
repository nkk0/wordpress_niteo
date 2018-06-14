<?php

$test1 = array(array('', 'python', "print"), '<pre class="python" style="font-family:monospace;"><span style="color: #ff7700;font-weight:bold;">print</span></pre>');

$test2 = array(array('', 'python', "
my_counter = 0
def my_func(my_var):
    print('Increasing counter!')
	counter +=1
"), '<pre class="python" style="font-family:monospace;">&nbsp;
my_counter <span style="color: #66cc66;">=</span> <span style="color: #ff4500;">0</span>
<span style="color: #ff7700;font-weight:bold;">def</span> my_func<span style="color: black;">&#40;</span>my_var<span style="color: black;">&#41;</span>:
    <span style="color: #ff7700;font-weight:bold;">print</span><span style="color: black;">&#40;</span><span style="color: #483d8b;">\'Increasing counter!\'</span><span style="color: black;">&#41;</span>
	counter +<span style="color: #66cc66;">=</span><span style="color: #ff4500;">1</span>
&nbsp;</pre>');

$test3 = array(array('', 'javascript', "for (var i = 0; i < 5; i++) {
  setTimeout(() => {
    console.log(i);
  }, 100);
}
"), '<pre class="javascript" style="font-family:monospace;"><span style="color: #000066; font-weight: bold;">for</span> <span style="color: #009900;">&#40;</span><span style="color: #000066; font-weight: bold;">var</span> i <span style="color: #339933;">=</span> <span style="color: #CC0000;">0</span><span style="color: #339933;">;</span> i <span style="color: #339933;">&lt;</span> <span style="color: #CC0000;">5</span><span style="color: #339933;">;</span> i<span style="color: #339933;">++</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span>
  setTimeout<span style="color: #009900;">&#40;</span><span style="color: #009900;">&#40;</span><span style="color: #009900;">&#41;</span> <span style="color: #339933;">=&gt;</span> <span style="color: #009900;">&#123;</span>
    console.<span style="color: #660066;">log</span><span style="color: #009900;">&#40;</span>i<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
  <span style="color: #009900;">&#125;</span><span style="color: #339933;">,</span> <span style="color: #CC0000;">100</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<span style="color: #009900;">&#125;</span>
&nbsp;</pre>'); 

?>
