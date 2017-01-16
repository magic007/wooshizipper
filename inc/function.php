<?php
//检查请求字符串
function checkme($power)
{
	if(empty($_SESSION[TB_PREFIX.'admin_name']) or $_SESSION[TB_PREFIX.'admin_roleId']<$power)
	{
		print_error('You do not have permission to access this page!');
	}
}
function get_str($string)
{
	if (!get_magic_quotes_gpc()) {
		return addslashes($string);
	}
	return $string;
}
function cleanArrayForMysql($data)
{
	if(!get_magic_quotes_gpc())
		return (is_array($data))?array_map('cleanArrayForMysql', $data):mysql_real_escape_string($data);
	else
		return $data;
}
function checkSqlStr($string)
{
	$string = strtolower($string);
	if(substr_count($string,'%20union')>0 || substr_count($string,'%20select')>0 || substr_count($string,'%20and')>0 || substr_count($string,'%20where')>0 || substr_count($string,'%20update')>0 || substr_count($string,'%20delete')>0 || substr_count($string,'%20when')>0 || substr_count($string,'%20from')>0 || substr_count($string,'%20version')>0 || substr_count($string,'%20ascii')>0 || substr_count($string,'%20substring')>0)
	return true;
	else
	return false;
}
//重定向到某页
function redirect($url)
{
	//echo  "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=".$url."\">";
	echo "<script>window.location.href='".$url."'</script>";
	exit;
}
//重定向到某页
function redirect_to($model,$action='index',$query='')
{
	$url='./?p='.$model.'&a='.$action;
	$url.=empty($query)?'':'&'.$query;
	//echo  "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=".$url."\">";
	echo "<script>window.location.href='".$url."'</script>";
	exit;
}
function print_error($info)
{
	echo $info;
	exit;
}
function success()
{
	echo '<script>alert("授权文件安装成功！");location.href="./";</script>';
	exit;
}
//生成新的文件($str为字符串,$filePath为生成时的文件路径包括文件名)
function string2file($str,$filePath)
{
	$fp=fopen($filePath,'w+');
	fwrite($fp,$str);
	fclose($fp);
}
//从文件中读取字符
function file2string($filePath)
{
	$fp = fopen($filePath,"r");
	$content_= fread($fp, filesize($filePath));
	fclose($fp);
	return $content_;

}
function get_url($url)
{
	$fp = fopen($url,'r');
	while($line = @fgets($fp,1024))
	$content .= $line;
	return $content;
}
/*
	Add 2007-07-07
	获取中英文混合字符串的长度
	autor:suny
*/
function cnStrLen($str)
{
	$i = 0;
	$tmp = 0;
	while ($i < strlen($str))
	{
		if (ord(substr($str,$i,1)) >127)
		{
			$tmp = $tmp+1;
			$i = $i + 3;
		}
		else
		{
			$tmp = $tmp + 1;;
			$i = $i + 1;
		}
	}
	return $tmp;
}
/*
	Add 2007-07-07
	获取中英文混合字符在字符串中的位置
	autor:suny
*/
function cnStrPos($str,$keyword)
{
	$i = 0;
	$tem = 0;
	$temStr = strpos($str,$keyword);
	while ($i < $temStr)
	{
		if (ord(substr($str,$i,1)) >127)
		{
			$tmp = $tmp+1;
			$i = $i + 3;
		}
		else
		{
			$tmp = $tmp + 1;;
			$i = $i + 1;
		}
	}
	return $tmp;
}
//截取字符数
//$str-字符串
//$N-多少字符
function cnSubStr($str, $start, $lenth)
{
	$len = strlen($str);
	$r = array();
	$n = 0;
	$m = 0;
	for($i = 0; $i < $len; $i++) {
		$x = substr($str, $i, 1);
		$a = base_convert(ord($x), 10, 2);
		$a = substr('00000000'.$a, -8);
		if ($n < $start){
			if (substr($a, 0, 1) == 0) {
			}elseif (substr($a, 0, 3) == 110) {
				$i += 1;
			}elseif (substr($a, 0, 4) == 1110) {
				$i += 2;
			}
			$n++;
		}else{
			if (substr($a, 0, 1) == 0) {
				$r[] = substr($str, $i, 1);
			}elseif (substr($a, 0, 3) == 110) {
				$r[] = substr($str, $i, 2);
				$i += 1;
			}elseif (substr($a, 0, 4) == 1110) {
				$r[] = substr($str, $i, 3);
				$i += 2;
			}else{
				$r[] = '';
			}
			if (++$m >= $lenth){
				break;
			}
		}
	}
	return join('', $r);

} // End subString_UTF8
//去除HTML字符标记
function trimTags($string)
{
	$string=strip_tags($string);
	$string=str_replace(" ","",$string);
	$string=trim($string);
	return $string;
}
function mkdirs($path, $mode = 0777) //creates directory tree recursively
{
	$path=str_replace('\\','/',$path);
	$dirs = explode('/',$path);
	$pos = strrpos($path, ".");
	if ($pos === false) { // note: three equal signs
		// not found, means path ends in a dir not file
		$subamount=0;
	}
	else {
		$subamount=1;
	}

	for ($c=0;$c < count($dirs) - $subamount; $c++) {
		$thispath="";
		for ($cc=0; $cc <= $c; $cc++) {
			$thispath.=$dirs[$cc].'/';
		}
		if (!file_exists($thispath)) {
			//print "$thispath<br>";
			mkdir($thispath,$mode);
		}
	}
}
//验证器
function validates_presence_of($fieldName,$info)
{
	global $request;
	if(empty($request[$fieldName]))
	{
		echo $info.'was required to field!<br />';
		exit;
	}
}

function validates_email_of($fieldName,$info)
{
	if(function_exists(checkdnsrr))
	{
		global $request;
		if (!preg_match('/^[0-9a-z_\-\.]+@([0-9a-z\-]+.)+([a-z]){2,4}$/i', $request[$fieldName]))
		{		
			echo "E-mail address wrong.";
			exit;
		}
		else
		{
			list($name,$domain)=split("@",$request[$fieldName]);
			if(!checkdnsrr($domain,'MX'))
			{
				echo "E-mail not exist.";
				exit;
			}
		}
	}
}
function select($str_arr,$name,$select=null,$ev=null)
{
	if($ev)
	echo '<select id="'.$name.'" name="'.$name.'" '.$ev.'>';
	else
	echo '<select name="'.$name.'">';
	foreach ($str_arr as $k=>$v)
	{
		$selected=($select==$k)?'selected ':' ';
		?>
    	<option value="<?php echo $k ?>" <?php echo $selected ?>><?php echo $v ?></option>
		<?php
	}
	echo '</select>';
}
function db_select_box($str_arr,$key_feild,$value_feild,$name,$select=null,$ev=null)
{
	if($ev)
	echo '<select id="'.$name.'" name="'.$name.'" '.$ev.'>';
	else
	echo '<select id="'.$name.'" name="'.$name.'">';
	foreach ($str_arr as $o)
	{
		$selected=($select==$o->$key_feild)?'selected ':' ';
		?>
    	<option value="<?php echo $o->$key_feild ?>" <?php echo $selected ?>><?php echo $o->$value_feild ?></option>
		<?php
	}
	echo '</select>';
}
function db_radio_box($str_arr,$key_feild,$value_feild,$name,$select=null)
{
	foreach ($str_arr as $o)
	{
		$selected=($select==$o->$key_feild)?' checked="true" ':' ';
		?>
    	&nbsp;&nbsp;<input type="radio" <?php echo $selected ?> id="<?php echo $name ?>" name="<?php echo $name ?>" value="<?php echo $o->$key_feild ?>"><?php echo $o->$value_feild ?>
		<?php
	}
}
/*
	Add 2007-07-07
	截取一段字符串中的字符并标示出来
	autor:suny
*/
function get_keyword_str($str,$keyword,$getstrlen)
{
	if(cnStrLen($str)> $getstrlen) 
	{
		$strlen = cnStrLen($keyword);
		$strpos = cnStrPos($str,$keyword);
		$halfStr = intval(($getstrlen-$strlen)/2);
		$str = cnSubStr($str,($strpos - $halfStr),$halfStr).$keyword.cnSubStr($str,($strpos + $strlen),$halfStr);
		return str_replace($keyword,'<span style="font-size: 12px; color: #F30;">'.$keyword.'</span>',$str).'...';
	}
	else
	{
		return str_replace($keyword,'<span style="font-size: 12px; color: #F30;">'.$keyword.'</span>',$str);
	}
}
/*检验文件大小*/
function DisplayFileSize($filesize){
	$array = array(
	'YB' => 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024,
	'ZB' => 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024, 'EB' => 1024 * 1024 * 1024 * 1024 * 1024 * 1024,
	'PB' => 1024 * 1024 * 1024 * 1024 * 1024,
	'TB' => 1024 * 1024 * 1024 * 1024,
	'GB' => 1024 * 1024 * 1024,
	'MB' => 1024 * 1024,
	'KB' => 1024,     );
	if($filesize <= 1024)
	{
		$filesize = $filesize . ' B';
	}
	foreach($array AS $name => $size)
	{
		if($filesize > $size || $filesize == $size)
		{
			$filesize = round((round($filesize / $size * 100) / 100), 0) . ' ' . $name;
		}
	}
	return $filesize;
}
/*产生$length位随机数*/
function random($length) {
	$hash = '';
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
	$max = strlen($chars) - 1;
	for($i = 0; $i < $length; $i++) {
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}
//获得客户端IP,并转换为long型
function getip()
{
	if(getenv('HTTP_CLIENT_IP'))
	{
		$client_ip = getenv('HTTP_CLIENT_IP');
	}
	elseif(getenv('HTTP_X_FORWARDED_FOR'))
	{
		$client_ip = getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR'))
	{
		$client_ip = getenv('REMOTE_ADDR');
	}
	else
	{
		$client_ip = $HTTP_SERVER_VAR['REMOTE_ADDR'];
	}
	return ip2long($client_ip);
} 
//获得文件格式后缀
function extend_2($file_name)
{
	$extend =explode("." , $file_name); 
	$va=count($extend)-1;
	return $extend[$va];
}
//列出某文件夹内所有文件
function rec_listFiles($from = '.')
{
    if(! is_dir($from))
        return false;
   
    $files = array();
    if( $dh = opendir($from))
    {
        while( false !== ($file = readdir($dh)))
        {
            // Skip '.' and '..'
            if( $file == '.' || $file == '..'||extend_2($file)!='php')
                continue;
            //$path = $from . '/' . $file;
            $path = $file;
            if( is_dir($path) )
                //$files += rec_listFiles($path);
				continue;
            else
                $files[] = $path;
        }
        closedir($dh);
    }
    return $files;
}
//对整个目录进行拷贝
function dir_copy($fdir,$tdir)
{   
	if(is_dir($fdir))
	{
		if (!is_dir($tdir))
		{
			mkdir($tdir);
		}
		$handle =opendir($fdir);
		while(false!==($filename=readdir($handle)))
		{	  
			if($filename!="."&&$filename!="..")dir_copy($fdir."/".$filename,$tdir."/".$filename);	 
		}
		closedir($handle);		
		return true;
	}
	else 
	{
		copy($fdir,$tdir);
		return true;
	}	
}
?>