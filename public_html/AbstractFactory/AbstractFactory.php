<?php

namespace AbstractFactory;

abstract class ExternalManager
{

    abstract function getHeaderText();

    abstract function getExporter();

    abstract function getImporter();

    abstract function getFooterText();
}

class ExcelExternalManager extends ExternalManager
{

    function getHeaderText()
    {
        return "Header for Excel";
    }

    function getExporter()
    {
        return new ExcelExporter();
    }

    function getImporter()
    {
        return new ExcelImporter();
    }

    function getFooterText()
    {
        return "Footer for Excel";
    }

}

class CSVExternalManager extends ExternalManager
{

    function getHeaderText()
    {
        return "Header for  CSV";
    }

    function getExporter()
    {
        return new CSVExporter();
    }

    function getImporter()
    {
        return new CSVImporter();
    }

    function getFooterText()
    {
        return "Footer for CSV";
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