<?php

namespace AbstractFactoryAlternative;

abstract class ExternalManager
{

    abstract function getHeaderText();

    abstract function make($objName);

    abstract function getFooterText();
}

class ExcelExternalManager extends ExternalManager
{

    function getHeaderText()
    {
        return "Header for Excel";
    }

    function make($objName)
    {
		switch ($objName) {
			case 'exporter':
				return new ExcelExporter();
			case 'importer':
				return new ExcelImporter();
		}
    }

    function getFooterText()
    {
        return "Footer for Excel";
    }
}

class CSVExternalManagerAlternative extends ExternalManager
{

    function getHeaderText()
    {
        return "Header for CSV";
    }

    function make($objName)
    {
		switch ($objName) {
			case 'exporter':
				return new CSVExporter();
			case 'importer':
				return new CSVImporter();
		}
    }

    function getFooterText()
    {
        return "Footer for Excel";
    }
}

//------------------------------------------------------------------------------

abstract class Exporter
{

    abstract function export();
}

class ExcelExporter extends Exporter
{

    function export()
    {
        return "Exported to Excel.";
    }

}

class CSVExporter extends Exporter
{

    function export()
    {
        return "Exported to CSV.";
    }

}

abstract class Importer
{

    abstract function import();
}

class ExcelImporter extends Importer
{

    function import()
    {
        return "Imported from Excel.";
    }

}

class CSVImporter extends Importer
{

    function import()
    {
        return "Imported from CSV.";
    }

}