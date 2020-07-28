var wms_layers = [];

var format_Ageatdeathintellectualdisability_0 = new ol.format.GeoJSON();
var features_Ageatdeathintellectualdisability_0 = format_Ageatdeathintellectualdisability_0.readFeatures(json_Ageatdeathintellectualdisability_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Ageatdeathintellectualdisability_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Ageatdeathintellectualdisability_0.addFeatures(features_Ageatdeathintellectualdisability_0);
var lyr_Ageatdeathintellectualdisability_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_Ageatdeathintellectualdisability_0, 
                style: style_Ageatdeathintellectualdisability_0,
                interactive: true,
    title: 'Age at death - intellectual disability<br />\
    <img src="styles/legend/Ageatdeathintellectualdisability_0_0.png" /> 50.4 - 59.4 <br />\
    <img src="styles/legend/Ageatdeathintellectualdisability_0_1.png" /> 59.4 - 62.3 <br />\
    <img src="styles/legend/Ageatdeathintellectualdisability_0_2.png" /> 62.3 - 64.1 <br />\
    <img src="styles/legend/Ageatdeathintellectualdisability_0_3.png" /> 64.1 - 71.9 <br />'
        });

lyr_Ageatdeathintellectualdisability_0.setVisible(true);
var layersList = [lyr_Ageatdeathintellectualdisability_0];
lyr_Ageatdeathintellectualdisability_0.set('fieldAliases', {'STATEFP': 'STATEFP', 'STATENS': 'STATENS', 'AFFGEOID': 'AFFGEOID', 'GEOID': 'GEOID', 'STUSPS': 'STUSPS', 'NAME': 'State', 'LSAD': 'LSAD', 'ALAND': 'ALAND', 'AWATER': 'AWATER', 'state age at death IDD.ID only_STATEFP': 'state age at death IDD.ID only_STATEFP', 'state age at death IDD.ID only_Intellectual disability': 'state age at death IDD.ID only_Intellectual disability', 'auxiliary_storage_labeling_positionx': 'auxiliary_storage_labeling_positionx', 'auxiliary_storage_labeling_positiony': 'auxiliary_storage_labeling_positiony', });
lyr_Ageatdeathintellectualdisability_0.set('fieldImages', {'STATEFP': 'Hidden', 'STATENS': 'Hidden', 'AFFGEOID': 'Hidden', 'GEOID': 'Hidden', 'STUSPS': 'Hidden', 'NAME': 'TextEdit', 'LSAD': 'Hidden', 'ALAND': 'Hidden', 'AWATER': 'Hidden', 'state age at death IDD.ID only_STATEFP': 'Hidden', 'state age at death IDD.ID only_Intellectual disability': 'TextEdit', 'auxiliary_storage_labeling_positionx': 'Hidden', 'auxiliary_storage_labeling_positiony': 'Hidden', });
lyr_Ageatdeathintellectualdisability_0.set('fieldLabels', {'NAME': 'no label', 'state age at death IDD.ID only_Intellectual disability': 'no label', });
lyr_Ageatdeathintellectualdisability_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});