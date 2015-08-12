<?
namespace x1\requirejs;

class RequireAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@x1/requirejs';
	
	public $js         = [
		'require.js',
	];
}
?>