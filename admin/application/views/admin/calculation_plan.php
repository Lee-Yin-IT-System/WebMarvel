<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include/frminput.css">


<style type="text/css">
.kanan {
    text-align: right;
}
</style>

<div id="content" class="">
    <!-- content starts -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url(); ?>admin">Home</a>
            </li>
            <li>
                <a href="#">Calculation Plan</a>
            </li>
        </ul>
    </div>




    <div class=" row" style="margin-top:-18px">
        <div class="box col-md-12">
            <div class="box-inner">
                <!--<div class="box-header well" data-original-title="">
        <h2><i ></i> Standard Gramasi</h2>

       
    </div>-->
                <div class="box-content">



                <?= $this->session->flashdata('flash'); ?>
                    <form id="form2" name="form2">
                        <div id="form20" name="form20">

                            <div class="box-tools" style="float:right">

                                <div class="input-group" style="width: 150px; margin-top:0px; padding-right:-10px">
                                    <span class="input-group" style="width: 150px; margin-top:0px; padding-right:-10px">
                                        <input type="text" name="table_search" id="table_search"
                                            class="form-control input-sm pull-right" placeholder="Search"
                                            style="z-index:0;" />
                                    </span>
                                    <div class="input-group-btn">
                                        <button type="button" id="btnsrch" class="btn btn-sm btn-default"
                                            style="margin-left:2px;z-index:0;"><i class="fa fa-search"></i> </button>
                                    </div>

                                </div>

                            </div>
                    <!-- <div>
                        <br> -->
                            <a href="http://192.168.4.12:2301/marvel-MJL/ci-estimate/importnew" target="_blank" class="btn btn-primary"><i class="fas fa-file-import"></i>Import Excel</a>
                            <a href="<?php echo base_url('ccalculationplan/tampil') ?>" class="btn btn-primary"><i class="fas fa-file-import"></i>Refresh</a>
                        <!-- </div> -->

                            <!-- <button type="button" id="chkAdd" name="chkAdd" style="border-radius: 3px;"
                                class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Add </button>
                            <button type="button" id="chkEdit" name="chkEdit" style="border-radius: 3px;"
                                class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit </button>
                            <button type="button" id="chkDel" name="chkDel" style="border-radius: 3px;"
                                class="btn btn-sm btn-primary btn-flat"><i class="fa fa-remove"></i> Delete </button> -->

                            <!-- <form action="<?php //echo base_url()?>ccalculationplan/excel" method='POST' enctype="multipart/form-data">
                                <div class="form-row mb-4">
                                    <div class="col-3">
                                        <input type="file" class="form-control-file" id="importexcel" name="importexcel"
                                            accept=".xlsx,.xls">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>

                                </div>
                            </form> -->
                            
                            


                            <div class="floating-form" id="contact_form" style="z-index:1;">
                                <div class="contact-opener">Open Form</div>
                                <div class="judul" style="margin-top:20px;margin-bottom:10px">Calculation Plan</div>
                                <div id="contact_results"></div>
                                <div id="contact_body" class="contact_body" style="z-index:1;">

                                    <div>Order Number</div>
                                    <input type="text" name="stylecode" id="stylecode" class="input-field"
                                        style="width:100%">

                                    <div>Style</div>
                                    <input type="text" name="fabtype" id="fabtype" style="width:100%;display:none ">
                                    <input type="text" name="fabtypecmb" id="fabtypecmb" style="width:100%; ">



                                    <div style="margin-top: 4px;">Color Desc</div>
                                    <input type="text" name="standardvalue" id="standardvalue" class="input-field"
                                        style="width:100%">

                                </div>

                                <button type="button" id="chkSave" style="border-radius: 3px;" name="chkSave"
                                    class="btn btn-sm btn-primary btn-flat" style="margin-top:-10px"><i
                                        class="fa fa-save"></i> Save </button>
                                <button type="button" id="chkCancel" style="border-radius: 3px;" name="chkCancel"
                                    class="btn btn-sm btn-primary btn-flat" style="margin-top:-10px"><i
                                        class="fa fa-refresh"></i> Cancel </button>


                            </div>


                    </form>

                    <!-- <a href = "C:\Users\LENOVO\Documents\FIN-SPJB\SPJB.exe"> GOOOO </a> -->
                    <!-- C:\Program Files (x86)\Zebra Technologies\Zebra Setup Utilities\App -->
                    <!-- <form method="post" action="< base_url('ccalculationplan/exe') ?>">
                        <input type="button" name="submits" value="Start Game Server"> | 
                        <input type="button" name="submits" value="Start Master Server">
                    </form> -->

                    <!-- <form action="<?php //echo base_url()?>ccalculationplan/order_summary_insert" method='POST' enctype="multipart/form-data">
                    <button type="submit" class="btn btn-primary">Importssss</button>
                    </form> -->

                    <!-- <form action="<?php //echo base_url()?>ccalculationplan/uploadData" method='POST' enctype="multipart/form-data">
                                <div class="form-row mb-4">
                                    <div class="col-3">
                                        <input type="file" class="form-control-file" id="importexcel" name="importexcel"
                                            accept=".xlsx,.xls">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>

                                </div>
                            </form> -->

                    <!-- <form method="POST" action="<?= site_url('ccalculationplan/excel') ?>" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                <label class="col-form-label text-md-left">Upload File</label> 
                                                    <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                                                    <div class="mt-1">
                                                        <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                                    </div>
                                                    <?= form_error('file','<div class="text-danger">','</div>') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <div class="form-group mb-0">
                                        <button type="submit" name="import" class="btn btn-primary"><i class="fas fa-upload mr-1"></i>Upload Guys</button> 
                                    </div>
                                </div>
                            </form> -->
                    <div id="groupinput" class="form-group" style="overflow:auto; margin:5px 0 5px 0;">

                        <div id="grid"></div>


                    </div>
                    
                    <script type="text/javascript">
                    var idstyle;
                    var actsave;

                    $(document).ready(function() {

                        var hgt;
                        var frm;
                        var wnd;
                        var taskb = document.documentElement.clientHeight;
                        hgt = taskb - 166;


                        $('#contact_form').height(hgt + 87);
                        $('#contact_body').height(hgt - 12);

                        $('#groupinput').height(hgt + 4);
                        $('#grid').height(hgt + 2);

                        disablebutton('<?php echo base_url(); ?>cfixedassets/getstatusbutton');
                        $(window).on("load", function() {
                            loadgrid();
                        });

                        function onChange() {

                            var combobox = $("#fabtypecmb").data("kendoComboBox").value();
                            $("#fabtype").val(combobox);
                        }
                        // $("#fabtypecmb").kendoComboBox({
                        // 	dataTextField: "nama",
                        // 	dataValueField: "id",
                        // 	autoWidth: true,
                        // 	//dataSource: data2,
                        // 	change: onChange,
                        // 	dataSource: {
                        // 		transport: {
                        // 			read: {
                        // 				type: "get",
                        // 				dataType: "json",
                        // 				url: 'getfabric'
                        // 			}
                        // 		}
                        // 	},
                        // 	index: 0,

                        // });

                        // $('#btnsrch').on('click', function(){
                        // 	loadgrid();

                        // });

                        $("#standardvalue").keypress(function(e) {
                            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
                        });

                        // $("#chkDel").click(function(){

                        // 	if (idstyle > 0)
                        // 	{
                        // 		confirmAction = confirm("Are you sure to execute this action?");
                        // 		if (confirmAction) {
                        // 						$.ajax({
                        // 							url : "./hapusstandardgramasi",
                        // 							type: "post",
                        // 							data:{id:idstyle},

                        // 							success: function(data)
                        // 								{
                        // 									if (data==1)
                        // 									{alert('Delete Success'); location.reload();}
                        // 									else
                        // 									{alert('Error Delete');}	
                        // 								}
                        // 							});
                        // 							$("#chkEdit").prop("disabled",true);
                        // 							$("#chkAdd").prop("disabled",true);
                        // 		} 

                        // 	}
                        // 	else
                        // 	{
                        // 		alert('Please select the row to be deleted');
                        // 	}




                        // });
                        // $("#chkSave").click(function(){
                        // 	var stylecode= $("#stylecode").val()
                        // 	var select = $("#fabtype").val();
                        // 	var fabtype= select;
                        // 	/*if (fabtype=='')
                        // 	{fabtype=$("#fabtypecmb").data("kendoComboBox").text();
                        // 		$("#fabtype").val(fabtype);
                        // 		alert(fabtype);
                        // 	}*/


                        // 	fabtype=$("#fabtypecmb").data("kendoComboBox").text();
                        // 		$("#fabtype").val(fabtype);



                        // 	if((typeof(stylecode) != "undefined" && stylecode !== null && stylecode !== '') && (typeof(fabtype) != "undefined" && fabtype !== null) && fabtype !== ''  ) {
                        // 		if (fabtype)
                        // 		{
                        // 			if (actsave==1)
                        // 				{

                        // 					updatealt(idstyle);idstyle=0;
                        // 					setTimeout(function(){
                        // 						location.reload();
                        // 					}, 500);
                        // 				}
                        // 			if (actsave==0)
                        // 				{

                        // 					idstyle=0;
                        // 					savealt();idstyle=0;
                        // 					setTimeout(function(){
                        // 						location.reload();
                        // 					}, 500);

                        // 				}


                        //     	}
                        // 	}
                        // 	else
                        // 	{
                        // 		alert('Text Style Code or Fabric Type cannot be empty');
                        // 	}
                        // });

                        // chkEdit = $("#chkEdit") ;
                        // chkEdit.click(function(){

                        // 	{

                        // 		actsave=1;
                        //        _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
                        // 	   	$("#chkAdd").prop("disabled",true);
                        // 		$("#chkDel").prop("disabled",true);
                        // 		$("#stylecode").prop("disabled",true);
                        // 		showfieldalt(idstyle);

                        // 		setTimeout(function(){
                        // 			var txt = $("#fabtype").val();
                        // 			 var combobox = $("#fabtypecmb").data("kendoComboBox");
                        // 			 combobox.text(txt);
                        // 		}, 900);


                        //     }
                        // });

                        // chkAdd = $("#chkAdd") ;
                        // chkAdd.click(function(){

                        // 	{
                        // 		idstyle=0;
                        // 		actsave=0;
                        // 		$("#chkEdit").prop("disabled",true);
                        // 		$("#chkDel").prop("disabled",true);
                        //        _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
                        // 	   tambah();
                        //     }
                        // });

                        // chkCancel = $("#chkCancel") ;
                        // chkCancel.click(function(){

                        // 	{
                        // 		idstyle=0;
                        // 		actsave=0;
                        // 		$("#chkEdit").prop("disabled",false);
                        // 		$("#chkDel").prop("disabled",false);
                        // 		$("#chkAdd").prop("disabled",false);
                        // 		$("#stylecode").prop("disabled",false);
                        //        _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
                        // 	   tambah();
                        // 	   _floatbox.animate({"right":"-350px"}, {duration: 300}).removeClass('visiable');
                        //     }
                        // });


                        var _scroll = true,
                            _timer = false,
                            _floatbox = $("#contact_form"),
                            _floatbox_opener = $(".contact-opener");
                        _floatbox.css("right", "-350px"); //initial contact form position

                        //Contact form Opener button
                        _floatbox_opener.click(function() {
                            /*
		if (_floatbox.hasClass('visiable')){
            _floatbox.animate({"right":"-350px"}, {duration: 300}).removeClass('visiable');
        }else{
           _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
        }
		tambah();
		idstyle=0;*/
                        });

                        //Effect on Scroll
                        $(window).scroll(function() {
                            if (_scroll) {
                                _floatbox.animate({
                                    "top": "30px"
                                }, {
                                    duration: 300
                                });
                                _scroll = false;
                            }
                            if (_timer !== false) {
                                clearTimeout(_timer);
                            }
                            _timer = setTimeout(function() {
                                _scroll = true;
                                _floatbox.animate({
                                    "top": "10px"
                                }, {
                                    easing: "linear"
                                }, {
                                    duration: 500
                                });
                            }, 400);
                        });

                    });

                    function loadgrid() {

                        var field = $('#table_search').val();

                        // $("#grid").kendoGrid({
                        // 	dataSource: {
                        // 			transport: {
                        // 			read: 
                        // 				{
                        // 					url: "<?php echo base_url(); ?>cstandardgramasi/tampilgrid",
                        // 					contentType: "application/json; charset=utf-8",
                        // 					dataType: "json",
                        // 					data:{field:field},
                        // 					type: 'get',
                        // 				},			
                        // 				},
                        // 				pageSize: 50,
                        // 				schema: {
                        // 								model: {
                        // 									fields: {
                        // 										//FAQty: { type: "number",format: "{0:n2}" },
                        // 										//LocCode: { field: "LocCode", defaultValue: 1 },
                        // 									}
                        // 								}},


                        // 					 },	




                        //     sortable: true,
                        // 	selectable: "row",

                        // 	pageable: {pageSizes: [50, 75, 100],},

                        //     columns: [
                        // 	{field: "idstyle",title: "ID Style", hidden:true  },
                        // 	 {field: "stylecode",title: "Style Code",width: 250,headerAttributes: {style: "font-weight: bold"}  },
                        // 	 {field: "fabtype",title: "Fabric Type",width: 150,headerAttributes: {style: "font-weight: bold"}},
                        // 	 {field: "standardvalue",title: "Standard Value",width: 120,headerAttributes: {style: "font-weight: bold"}},




                        //     ]


                        $("#grid").kendoGrid({
                            dataSource: {
                                transport: {
                                    read: {
                                        url: "<?php echo base_url(); ?>ccalculationplan/tampilgrid",
                                        contentType: "application/json; charset=utf-8",
                                        dataType: "json",
                                        type: 'get',
                                    },
                                },
                                pageSize: 50,
                                schema: {
                                    model: {
                                        fields: {
                                            PercentageCutting: {
                                                type: "number",
                                                format: "{0:n2}",
                                            },
                                            //LocCode: { field: "LocCode", defaultValue: 1 },
                                        }
                                    }
                                },


                            },




                            sortable: true,
                            selectable: "row",

                            pageable: {
                                pageSizes: [50, 75, 100],
                            },

                            columns: [
                                // {field: "idstyle",title: "ID Style", hidden:true  },
                                {
                                    field: "ORDER_NO",
                                    title: "Order Number",
                                    width: 200,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    field: "STYLE",
                                    title: "Style",
                                    width: 230,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    field: "COLOR_DESC",
                                    title: "Color Desc",
                                    width: 230,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    field: "TOTAL_QTY",
                                    title: "Total Qty",
                                    width: 100,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    field: "TOTAL_CUTTING",
                                    title: "Total Cutting",
                                    width: 100,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    title: "Percentage", 
                                    width: 75, 
                                    headerAttributes: { style: "font-weight: bold" }, editable: "false",
                                    template: "<div class='Percentage' style = width:100% ;></div>"
                                },
                                {
                                    field: "MinCTDate",
                                    title: "Start Cutting",
                                    width: 100,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                                {
                                    field: "MaxCTDate",
                                    title: "Last Cutting",
                                    width: 100,
                                    headerAttributes: {
                                        style: "font-weight: bold"
                                    }
                                },
                            ],
                           dataBound: function(e) {
                            var grid = this;

                            grid.tbody.find(".Percentage").each(function(e) {
                                var row = $(this).closest("tr");
                              var model = grid.dataItem(row);

                              $(this).kendoProgressBar({
                                max: 100,
                                value: model.PercentageCutting
                              })
                            });
                          }
                        }).on("click", "tbody td", function(e) {
                            var cell = $(e.currentTarget);
                            var cellIndex = cell[0].cellIndex;
                            var grid = $("#grid").data("kendoGrid");
                            var column = grid.columns[cellIndex];
                            var dataItem = grid.dataItem(cell.closest("tr"));
                            OrderNo = dataItem.ORDER_NO;
                            Style = dataItem.STYLE;
                            ColorDesc = dataItem.COLOR_DESC;
                            window.open("<?= base_url("ccalculationplan/tampilDetail") ?>?ORDER_NO=" + OrderNo +
                                "&STYLE=" + Style + "&COLOR_DESC=" + ColorDesc);
                            // console.log(OrderNo, Style, ColorDesc);
                        });
                    }
                    </script>