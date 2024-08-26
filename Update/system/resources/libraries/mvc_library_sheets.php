<?php

use OpenSpout\Reader\Common\Creator\ReaderEntityFactory;
use OpenSpout\Writer\Common\Creator\WriterEntityFactory;

class MVC_Library_Sheets 
{
	public function read($path)
	{
		$reader = ReaderEntityFactory::createXLSXReader();
		$reader->open($path);
		
		return $reader;
	}

	public function create($file, $rows)
    {
		try {
			$writer = WriterEntityFactory::createXLSXWriter();
			$writer->openToFile($file);
			
			foreach ($rows as $row):
				$rowFinal = WriterEntityFactory::createRowFromArray($row);
				$writer->addRow($rowFinal);
			endforeach;

			$writer->close();
		} catch (Exception $e) {
			return false;
		}
    }
}