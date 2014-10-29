<?php
class ColumnWidget extends CWidget {
	public $data = array();
	public $columns;
	public $width;
	
	public $enmu = array(
			'推荐'=>'important',
			'更新'=>'success',
			''=>'',
	);
	
	public function init() {
		parent::init();
		$width = 100/$this->columns."%";
	}
	
	public function run() {
		echo CHtml::openTag("table",array("class"=>"table table-hover"));
		echo CHtml::openTag("tbody");
		echo CHtml::openTag("tr");
		$i = 0;
		foreach($this->data as $item) {
			echo CHtml::openTag("td",array("width"=>$this->width));
			
			$aOptions = array("href"=>$item->link, "target"=>"_blank", "dbid"=>$item->id);
			if($item->COLOR) 
				$aOptions["style"] = "color:".$item->COLOR;
			if($item->DESCRIPTION) {
				$aOptions["data-toggle"] = "tooltip";
				$aOptions["title"] = $item->DESCRIPTION;
			}
			echo CHtml::openTag("a", $aOptions);
			echo $item->name;
			echo CHtml::closeTag("a");
			echo "&nbsp;";
			if($item->FLAG) {
				echo CHtml::openTag("span", array("class"=>"label label-".$this->enmu[$item->FLAG]));
				echo $item->FLAG;
				echo CHtml::closeTag("span");
			}
			
			echo CHtml::closeTag("td");
			if($i%$this->columns == $this->columns-1) 
				echo "</tr><tr>";
			$i++;
		}
		$k = 0;
		if($i%$this->columns != 0)
			$k = $this->columns - $i%$this->columns;
		
		for($j = 0; $j < $k; $j++) 
			echo "<td></td>";
		
		echo CHtml::closeTag("tr");
		echo CHtml::closeTag("tbody");
		echo CHtml::closeTag("table");
	}
}