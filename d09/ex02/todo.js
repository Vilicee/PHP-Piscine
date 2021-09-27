var index = 0;

function ft_new()
{
	var to_do = prompt("Make a new item to your to-do list");
	var ft_list = document.getElementById("ft_list");
	var element = document.createElement("div");
	ft_list.parentElement.prepend(element);
	element.appendChild(document.createTextNode(to_do));
	element.onclick = function ()
	{
        var answer = confirm("Do you want to confirm this action?");
		if (answer == true)
		{
			this.parentNode.removeChild(this);
		}
        else
			return ;
	}
}
