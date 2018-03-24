<?php
if(!function_exists('my_file'))
{
	function my_file($filename,$type)
	{
		
		$client=base_url()."public/client/";
		/*Client*/
		
		if($type==1)
		{
			$str= "<link href='".$client."css/$filename.css' rel='stylesheet'/>";
		}
		if($type==2)
		{
			$str="<script src='".$client."js/$filename.js' ></script>";
		}
		
		if($type==3)
		{
			$str= "<link href='".$client."fonts/$filename.css' rel='stylesheet'/>";
		}
		
		return $str;
	}
}

if(!function_exists('dropdown'))
{
	function dropdown($field,$table,$condition,$name)
	{
			$CI = get_instance();
			echo"<select name='$name' class='selectfield' id='$name'>";
			$ans=$CI->get_where($field,$table,$condition);
			
			if($ans=="no")
			{
				echo"<option class='black-option'>No data</option>";
			}
			else
			{
				
				foreach($ans as $value)
				{
					echo "<option value='$value[0]' class='black-option'>$value[1]</option>";
				}
			}
			echo "</select>";
	}
}

?>