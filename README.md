# PHP Classes for the Italian Fatturazione Elettronica

## How did I generate these classes?

1. Download `Schema_VFSM10.xsd` from https://www.agenziaentrate.gov.it/wps/content/nsilib/nsi/schede/comunicazioni/fatture+e+corrispettivi/fatture+e+corrispettivi+st/st+invio+di+fatturazione+elettronica
2. Download `xmldsig-core-schema.xsd` from http://www.w3.org/TR/2002/REC-xmldsig-core-20020212/xmldsig-core-schema.xsd
3. Modify the `Schema_VFSM10.xsd` file by replacing the line
    ```xml
    <xs:import namespace="http://www.w3.org/2000/09/xmldsig#" schemaLocation="http://www.w3.org/TR/2002/REC-xmldsig-core-20020212/xmldsig-core-schema.xsd"/>
    ```
    to
    ```xml
    <xs:import namespace="http://www.w3.org/2000/09/xmldsig#" schemaLocation="xmldsig-core-schema.xsd"/>
    ```
4. Create this `config.yml` YAML file:
    ```yml
    xsd2php:
        namespaces:
            'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.0': MLocati\EFattura\AgenziaEntrate
            'http://www.w3.org/2000/09/xmldsig#': MLocati\EFattura\DSig
        destinations_php:
            MLocati\EFattura\AgenziaEntrate: out/src/AgenziaEntrate
            MLocati\EFattura\DSig: out/src/DSic
        destinations_jms:
            MLocati\EFattura\AgenziaEntrate: out/metadata/AgenziaEntrate
            MLocati\EFattura\DSig: out/metadata/DSig
        #aliases: null
        naming_strategy: short
        path_generator: psr4
    ```
4. Checkout `https://github.com/goetas-webservices/xsd2php.git`
5. Run the `bin/xsd2php` CLI command included in xsd2php:
    ```sh
    path/to/xsd2php/bin/xsd2php path/to/config.yml path/to/Schema_VFSM10.xsd
    ```