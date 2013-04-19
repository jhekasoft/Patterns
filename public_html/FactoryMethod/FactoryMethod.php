<?php

namespace FactoryMethod;

abstract class ExternalManager
{

    abstract function getHeaderText();

    abstract function getExporter();

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

    function getFooterText()
    {
        return "Footer for CSV";
    }

}

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
