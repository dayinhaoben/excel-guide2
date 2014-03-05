
<div id="contactBox" style="width:300px; position:absolute;top:0px;right:-301px;">
   
    <div class="contactClick" style="position:absolute; margin-left:-64px;">
        <img src="images/contact2.jpg" style="border-radius:8px;" onclick="dianwo();" />
    </div>
   

    <div class="floatContactForm" style="height:370px; border-radius:5px;background-color:#FFCC99;">
        <form >
            <table style="padding-left:5px;">
                <tr><td>Contact Us</td></tr>
                <tr><td><input type="text" name="name" placeholder="Name" style="width:280px;height:30px;"  /></td></tr>
                <tr><td><input type="text" name="email" placeholder="E-mail" style="width:280px;height:30px;"/></td></tr>
                <tr><td><input type="text" name="subject" placeholder="Subject" style="width:280px;height:30px;"/></td></tr>
                <tr><td><textarea  name="content" placeholder="Content" style="overflow:scroll;overflow-x:hidden; height:200px; width:280px; resize:none;"></textarea></td></tr>
                <tr><td><input type="submit" name="submit" value="Send" /></td></tr>
            </table>
        </form>
    </div>
</div>



<script type="text/javascript">
    var obj = document.getElementById("contactBox");
	window.onscroll = function() {
		
		obj.style.top = document.body.scrollTop;
	}
	window.onresize = window.onscroll;
	window.onscroll;

	function dianwo() {         
            var x = obj.offsetLeft;
            var bodyx = document.body.clientWidth;
           if(x-bodyx==-301) {
                x=bodyx+1;
            } else if(x-bodyx==1) {
                x= bodyx-301;
            } 
            obj.style.left = x;             
    }   
</script>

