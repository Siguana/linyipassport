/* OT Document JAVASCRIPT */
/*
document.addEvent('domready',function() {
	//Smooth Scroll when click on Elements on Window
	new SmoothScroll({duration: 1000}, window);
}); */
//Use: Call function goto_top()

/*
var goto_top_type = -1;
var goto_top_itv = 0;

function goto_top_timer() {
	var y = goto_top_type == 1 ? document.documentElement.scrollTop : document.body.scrollTop;
	//alert(y);
	var moveby = 15; // set this to control scroll seed. minimum is fast

	y -= Math.ceil(y * moveby / 100);
	if (y < 0)
	y = 0;

	if (goto_top_type == 1)
	document.documentElement.scrollTop = y;
	else
	document.body.scrollTop = y;

	if (y == 0) {
		clearInterval(goto_top_itv);
		goto_top_itv = 0;
	}
}

function goto_top() {
	if (goto_top_itv == 0) {
		if (document.documentElement && document.documentElement.scrollTop)
		goto_top_type = 1;
		else if (document.body && document.body.scrollTop)
		goto_top_type = 2;
		else
		goto_top_type = 0;

		if (goto_top_type > 0)
		goto_top_itv = setInterval('goto_top_timer()', 55);
	}
}
*/

function equaHeightExtendBoxs()
{
	var bottomExtends = $$('div.ot-bottom-extends div.bottom-extend');
	var maxHeight = 0;
	
	bottomExtends.each(function(item, index)
	{
		//var height = parseInt(item.getStyle('height')); console.log(height);
		var height = item.getStyle('height').toInt();
		
		if(height > maxHeight)
		{
			maxHeight = height; 
		}
	});
	bottomExtends.setStyle('height', maxHeight + 'px');
}
function equaHeightBottomBox()
{
	var bottomboxes = $$('div.ot-bottomboxes div.otRounded-mid');
	var maxHeight = 0;
	
	bottomboxes.each(function(item, index)
	{
		var height = parseInt(item.getStyle('height'));
		
		if(height > maxHeight)
		{
			maxHeight = height;
		}
	});
	bottomboxes.setStyle('height', maxHeight + 'px');
}

window.addEvent ('load', function() {
	//goto_top_timer();
	//goto_top();
	equaHeightExtendBoxs();
	//equaHeightBottomBox();
});






