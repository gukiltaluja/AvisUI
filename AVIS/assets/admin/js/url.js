//var ip = "localhost";
//var ip = "http://198.169.0.90";
//var ip = "http://192.168.0.63";
//var ip = "http://3.139.37.142";
//var ip = "http://125.63.112.189";
// var ip = "http://125.63.112.114";
//var ip = "http://125.63.105.163";
//var ip = "http://180.151.25.254";
// var ip = "http://125.63.124.133";
// var ip = "http://125.63.100.107";
var ip = "http://119.82.83.64";
//var ip = "masterModule";
//var port = "9095";
//var port = "9093";
var port = "9093";
var masterService="/master_service";
var quoteService="/quote_service";
//APIs

var tyreCreate = ip+":"+port+masterService+"/tyre/addTyre";
var allTyreList = ip+":"+port+masterService+"/tyre/getTyreById";
var getfuelTypeList =  ip+":"+port+masterService+"/fuelType/getfuelTypeList";

var manufacturarAdd =  ip+":"+port+masterService+"/manufacturer/addManufacturer";
var getManufacturerList =  ip+":"+port+masterService+"/manufacturer/getManufacturerList";

var manufacturarContactAdd =  ip+":"+port+masterService+"/manufacturerContact/addManufacturerContact";

var getVehicleSegmentList =  ip+":"+port+masterService+"/vehicleSegment/getVehicleSegmentList";
var getModelById =  ip+":"+port+masterService+"/vehicleModel/getModelById";
var getModelManufacturer =  ip+":"+port+masterService+"/modal/getModelManufacturer";
var getFuelTankTypeList =  ip+":"+port+masterService+"/fuelTankType/getFuelTankTypeList";
var getVariantList =  ip+":"+port+masterService+"/variant/getVariantList";
var addVariant =  ip+":"+port+masterService+"/variant/addVariant";
var getUsageTypeList =  ip+":"+port+masterService+"/vehicleSegment/getUsageTypeList";
var getVariantsWithModelAndManufacturer =  ip+":"+port+masterService+"/variant/getVariantsWithModelAndManufacturer";
// var getVariantList =  ip+":"+port+masterService+"/variant/getVariantList";

// start akhilesh

var getTyreList =  ip+":"+port+masterService+"/tyre/getTyreList";
// var addTyre =  ip+":"+port+masterService+"/tyre/addTyre";
var getUsageTypeList =  ip+":"+port+masterService+"/usageType/getUsageTypeList";
var addUsageType = ip+":"+port+masterService+"/usageType/addUsageType";

var getRvList =  ip+":"+port+masterService+"/rv/getRvList";
var addRvs = ip+":"+port+masterService+"/rv/addRv";

var getPartTypeList =  ip+":"+port+masterService+"/partType/getPartTypeList";
var addPartType = ip+":"+port+masterService+"/partType/addPartType";

var getRmtbList =  ip+":"+port+masterService+"/rmtb/getRmtbList";
var addRmtb = ip+":"+port+masterService+"/rmtb/addRmtb";

var addfuelType = ip+":"+port+masterService+"/fuelType/addfuelType";

var addfuelTankType = ip+":"+port+masterService+"/fuelTankType/addfuelTankType";

var addVehicleSegment = ip+":"+port+masterService+"/vehicleSegment/addVehicleSegment";

var getcolorCodeList =  ip+":"+port+masterService+"/colorCodeController/colorCodeList";
var addColorCode = ip+":"+port+masterService+"/colorCodeController/addColorCode";

var getbankList =  ip+":"+port+masterService+"/bank/bankList";
var addBank = ip+":"+port+masterService+"/bank/addBank";

var getStateList =  ip+":"+port+masterService+"/state/getStateList";
var addState =  ip+":"+port+masterService+"/state/addState";

var vwCityDetails =  ip+":"+port+masterService+"/city/vwCityDetails";
var addcities =  ip+":"+port+masterService+"/city/addCity";

var getPartList =  ip+":"+port+masterService+"/part/getPartList";
var addPart = ip+":"+port+masterService+"/part/addPart";

var getInsuranceCompanyList =  ip+":"+port+masterService+"/inscompany/getInsuranceCompanyList";
var addInsuranceCompany = ip+":"+port+masterService+"/inscompany/addInsuranceCompany";

var roadTypeTaxList =  ip+":"+port+masterService+"/roadTypeTax/roadTypeTaxList";
var addRoadTypeTax = ip+":"+port+masterService+"/roadTypeTax/addRoadTypeTax";

var accessoriesTypeList =  ip+":"+port+masterService+"/accessoriesType/accessoriesTypeList";
var addAccessoriestypes = ip+":"+port+masterService+"/accessoriesType/addAccessoriesType";

var getSupplierList =  ip+":"+port+masterService+"/supplier/getSupplierList";
var addSuppliers = ip+":"+port+masterService+"/supplier/addSupplier";

var getSupplierLocationList =  ip+":"+port+masterService+"/supplierLocation/getSupplierLocationList";
var addSupplierLocation = ip+":"+port+masterService+"/supplierLocation/addSupplierLocation";

var getSupplierType =  ip+":"+port+masterService+"/supplierType/getSupplierTypeList";
var addSupplierType = ip+":"+port+masterService+"/supplierType/addSupplierType";

var carPriceList =  ip+":"+port+masterService+"/carPrice/carPriceList";
var addCarPrice = ip+":"+port+masterService+"/carPrice/addCarPrice";

var getInsuranceIdvList =  ip+":"+port+masterService+"/insuranceIdv/getInsuranceIdvList";
var addInsuranceIdv = ip+":"+port+masterService+"/insuranceIdv/addInsuranceIdv";

var cityServiceList =  ip+":"+port+masterService+"/cityService/cityServiceList";
var addcityService = ip+":"+port+masterService+"/cityService/addCityService";

var getServiceNameList =  ip+":"+port+masterService+"/serviceName/getServiceNameList";
var addServiceName = ip+":"+port+masterService+"/serviceName/addServiceName";

var getCarCategoryList =  ip+":"+port+masterService+"/car/getCarCategoryList";
var addCarCategory = ip+":"+port+masterService+"/car/addCarCategory";

var getCarCategoryServiceCostList =  ip+":"+port+masterService+"/carCategoryServiceCost/getCarCategoryServiceCostList";
var addCarCategoryServiceCost = ip+":"+port+masterService+"/carCategoryServiceCost/addCarCategoryServiceCost";

var accessoriesTypeList =  ip+":"+port+masterService+"/accessoriesType/accessoriesTypeList";
var addAccessoriesType = ip+":"+port+masterService+"/accessoriesType/addAccessoriesType";

var accessoriesList =  ip+":"+port+masterService+"/accessories/accessoriesList";
var addAccessories = ip+":"+port+masterService+"/accessories/addAccessories";

var getModelManufacturer =  ip+":"+port+masterService+"/modal/getModelManufacturer";
var addModel = ip+":"+port+masterService+"/modal/addModel";

var getServiceScheduleList =  ip+":"+port+masterService+"/masterServiceSchedule/getServiceScheduleList";
var addServiceSchedule = ip+":"+port+masterService+"/masterServiceSchedule/addServiceSchedule";

var cityDocumentList =  ip+":"+port+masterService+"/CityDocument/cityDocumentList";
var addCityDocument = ip+":"+port+masterService+"/CityDocument/addCityDocument";

var getReplacementCarCategoryList =  ip+":"+port+masterService+"/replacementPartController/getReplacementCarCategoryList";
var addReplacementCarCategory = ip+":"+port+masterService+"/replacementPartController/addReplacementCarCategory";

var addInsuranceZone =  ip+":"+port+masterService+"/insuranceZone/addInsuranceZone";
var insuranceZoneList = ip+":"+port+masterService+"/insuranceZone/insuranceZoneList";

var getQuote = ip+":"+port+quoteService+"/quote/getQuotes";
var getExistingQuotes = ip+":"+port+quoteService+"/quote/getExistingQuotes";

var addCamRequest =  ip+":"+port+masterService+"/camRequest/addCamRequest";
var getCityByPin = "https://api.postalpincode.in/pincode/";
var CamRequestCompanyNameList =  ip+":"+port+masterService+"/camRequest/CamRequestCompanyNameList";
var clientById =  ip+":"+port+masterService+"/client/clientById/";
var addClientContact =  ip+":"+port+masterService+"/clientContact/addClientContact";
var addInvoicing =  ip+":"+port+masterService+"/invoicing/addInvoicing";
var addClient =  ip+":"+port+masterService+"/client/addClient";
var addChildAccounts =  ip+":"+port+masterService+"/masterChildAccount/addChildAccounts";
var addCompany =  ip+":"+port+masterService+"/company/addCompany";


var addTransmission =  ip+":"+port+masterService+"/transmission/addTransmission";
var getTransmissionList =  ip+":"+port+masterService+"/transmission/getTransmissionList";

var addEmission =  ip+":"+port+masterService+"/emission/addEmission";
var getEmissionList =  ip+":"+port+masterService+"/emission/getEmissionList";

var getNcapTableList =  ip+":"+port+masterService+"/nCap/getNcapList";
var addNcap =  ip+":"+port+masterService+"//nCap/addNcap";

var CompanyGroupList =  ip+":"+port+masterService+"/companyGroup/groupList";
var addCompanyGroup =  ip+":"+port+masterService+"/companyGroup/addCompanyGroup";

var officeList =  ip+":"+port+masterService+"/avisOffice/officeList";
var addAvisOffice =  ip+":"+port+masterService+"/avisOffice/addAvisOffice";
// ~~~~~~~~~~~~~~~~~ edit url Code ~~~~~~~~~~~~~~~~~~~~~~~~

var colorCodeById =  ip+":"+port+masterService+"/colorCodeController/colorCodeById";
var updateColorCode =  ip+":"+port+masterService+"/colorCodeController/updateColorCode";

var getVehicleSegmentById =  ip+":"+port+masterService+"/vehicleSegment/getVehicleSegmentById";
var updateVehicleSegment =  ip+":"+port+masterService+"/vehicleSegment/updateVehicleSegment";

var getManufacturerContactList =  ip+":"+port+masterService+"/manufacturerContact/getManufacturerContactList";
var updateVehicleSegment =  ip+":"+port+masterService+"/vehicleSegment/updateVehicleSegment";

var getPackageList =  ip+":"+port+masterService+"/package/getPackageList";
var getPackageListById =  ip+":"+port+masterService+"/packageServiceMapping/getPackageById/";

var getTyreById =  ip+":"+port+masterService+"/tyre/getTyreById";
var updateTyre =  ip+":"+port+masterService+"/tyre/updateTyre";

var getUsageTypeById =  ip+":"+port+masterService+"/usageType/getUsageTypeById";
var updateUsageType =  ip+":"+port+masterService+"/usageType/updateUsageType";

var getAccessoriesListByids =  ip+":"+port+masterService+"/accessories/accessoriesByIds";

var getCarPriceById =  ip+":"+port+masterService+"/carPrice/carPriceById";
var updateCarPrice =  ip+":"+port+masterService+"/carPrice/updateCarPrice";

var getPartById =  ip+":"+port+masterService+"/part/getPartById";
var updatePart =  ip+":"+port+masterService+"/part/updatePart";

var getPartTypeById =  ip+":"+port+masterService+"/partType/getPartTypeById";
var updatePartType =  ip+":"+port+masterService+"/partType/updatePartType";

var getRvById =  ip+":"+port+masterService+"/rv/getRvById";
var updateRv =  ip+":"+port+masterService+"/rv/updateRv";

var getRmtbById =  ip+":"+port+masterService+"/rmtb/getRmtbById";
var updateRmtb =  ip+":"+port+masterService+"/rmtb/updateRmtb";

var getfuelTypeByIdt =  ip+":"+port+masterService+"/fuelType/getfuelTypeById";
var updatefuelType =  ip+":"+port+masterService+"/fuelType/updatefuelType";

var getFuelTankTypeById =  ip+":"+port+masterService+"/fuelTankType/getFuelTankTypeById";
var updateFuelTankType =  ip+":"+port+masterService+"/fuelTankType/updateFuelTankType";

var getManufacturerById =  ip+":"+port+masterService+"/manufacturer/getManufacturerById";
var updateManufacturer =  ip+":"+port+masterService+"/manufacturer/updateManufacturer";

var getManufacturerContactById =  ip+":"+port+masterService+"/manufacturerContact/getManufacturerContactById";
var updateManufacturerContact =  ip+":"+port+masterService+"/manufacturerContact/updateManufacturerContact";

var getServiceScheduleById =  ip+":"+port+masterService+"/masterServiceSchedule/getServiceScheduleById";
var updateServiceSchedule =  ip+":"+port+masterService+"/masterServiceSchedule/updateServiceSchedule";

var getVariantById =  ip+":"+port+masterService+"/variant/getVariantById";
var updateVariant =  ip+":"+port+masterService+"/variant/updateVariant";

var getTransmissionById =  ip+":"+port+masterService+"/transmission/getTransmissionById";
var updateTransmission =  ip+":"+port+masterService+"/transmission/updateTransmission";

var getEmissionById =  ip+":"+port+masterService+"/emission/getEmissionById";
var updateEmission =  ip+":"+port+masterService+"/emission/updateEmission";

var getNcapById =  ip+":"+port+masterService+"/nCap/getNcapById";
var updateNcap =  ip+":"+port+masterService+"/nCap/updateNcap";

var cityById =  ip+":"+port+masterService+"/city/cityById";
var updateCity =  ip+":"+port+masterService+"/city/updateCity";

var getStateById =  ip+":"+port+masterService+"/state/getStateById";
var updateState =  ip+":"+port+masterService+"/state/updateState";

var cityDocumentById =  ip+":"+port+masterService+"/CityDocument/cityDocumentById";
var updateCityDocument =  ip+":"+port+masterService+"/CityDocument/updateCityDocument";

var getSupplierLocationById =  ip+":"+port+masterService+"/supplierLocation/getSupplierLocationById";
var updateSupplierLocation =  ip+":"+port+masterService+"/supplierLocation/updateSupplierLocation";

var getSupplierTypeById =  ip+":"+port+masterService+"/supplierType/getSupplierTypeById";
var updateSupplierType =  ip+":"+port+masterService+"/supplierType/updateSupplierType";

var bankById =  ip+":"+port+masterService+"/bank/bankById";
var updateBank =  ip+":"+port+masterService+"/bank/updateBank";

var avisOfficeById =  ip+":"+port+masterService+"/avisOffice/companyGroupById";
var updateAvisOffice =  ip+":"+port+masterService+"/avisOffice/updateAvisOffice";

var companyGroupById =  ip+":"+port+masterService+"/companyGroup/companyGroupById";
var updateCompanyGroup =  ip+":"+port+masterService+"/companyGroup/updateCompanyGroup";

var getInsuranceCompanyById =  ip+":"+port+masterService+"/inscompany/getInsuranceCompanyById";
var updateInsuranceCompany =  ip+":"+port+masterService+"/inscompany/updateInsuranceCompany";

var insuranceZoneById =  ip+":"+port+masterService+"/insuranceZone/insuranceZoneById";
var updateInsuranceZone =  ip+":"+port+masterService+"/insuranceZone/updateInsuranceZone";

var getInsuranceIdvById =  ip+":"+port+masterService+"/insuranceIdv/getInsuranceIdvById";
var updateInsuranceIdv =  ip+":"+port+masterService+"/insuranceIdv/updateInsuranceIdv";

var getModelById =  ip+":"+port+masterService+"/modal/getModelById";
var updateModel =  ip+":"+port+masterService+"/modal/updateModel";

var getSupplierById =  ip+":"+port+masterService+"/supplier/getSupplierById";
var updateSupplier =  ip+":"+port+masterService+"/supplier/updateSupplier";

var cityServiceById =  ip+":"+port+masterService+"/cityService/cityServiceById";
var updateCityService =  ip+":"+port+masterService+"/cityService/updateCityService";
// ~~~~~~~~~~~~~~~~~ edit url Code ~~~~~~~~~~~~~~~~~~~~~~~~


// ~~~~~~~~~~~ START CLIENT MASTER CODE ~~~~~~~~~~~~~~~~~~~~~~~~~


var cityList =  ip+":"+port+masterService+"/city/cityList";
var addContactList =  ip+":"+port+masterService+"/clientContact/addContactList";
var addChildAccount =  ip+":"+port+masterService+"/masterChildAccount/addChildAccount";

// secondphase
var clientContactByClientId =  ip+":"+port+masterService+"/clientContact/clientContactByClientId";
var childAccountByClientId =  ip+":"+port+masterService+"/masterChildAccount/masterChildAccountByClientId";
var addClientDocument =  ip+":"+port+masterService+"/clientDocument/addClientDocument";
var getClientDocuments =  ip+":"+port+masterService+"/clientDocument/getDocumentListByclientId/";
var clientContactById =  ip+":"+port+masterService+"/clientContact/clientContactById";
var updateClientContact =  ip+":"+port+masterService+"/clientContact/updateClientContact";

var childAcountById =  ip+":"+port+masterService+"/masterChildAccount/masterChildAccountById";
var updateChildAccounts =  ip+":"+port+masterService+"/masterChildAccount/updateChildAccount";

var productAndServices =  ip+":"+port+masterService+"/clientProductAndServices/findProductAndServices/";
var deleteDocuments =  ip+":"+port+masterService+"/clientDocument/deleteDocument";
var deleteContact =  ip+":"+port+masterService+"/clientContact/deleteClientContact/";
var deleteChild =  ip+":"+port+masterService+"/masterChildAccount/deleteChildAccount";
// ~~~~~~~~~~~ END CLIENT MASTER CODE ~~~~~~~~~~~~~~~~~~~~~~~~~

