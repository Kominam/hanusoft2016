@extends('backend.pages.master')
@section('external_css')
   <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
   <link href="{{url('backend/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
   <link href="{{url('backend/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
@endsection
@section('content')
<section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      DataTables hidden row details example
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th class="hidden-phone">Platform(s)</th>
                                    <th class="hidden-phone">Engine version</th>
                                    <th class="hidden-phone">CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0</td>
                                    <td class="hidden-phone">Win 95+</td>
                                    <td class="center hidden-phone">4</td>
                                    <td class="center hidden-phone">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0</td>
                                    <td class="hidden-phone">Win 95+</td>
                                    <td class="center hidden-phone">5</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.5</td>
                                    <td class="hidden-phone">Win 95+</td>
                                    <td class="center hidden-phone">5.5</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 6</td>
                                    <td class="hidden-phone">Win 98+</td>
                                    <td class="center hidden-phone">6</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td class="hidden-phone">Win XP SP2+</td>
                                    <td class="center hidden-phone">7</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td class="hidden-phone">Win XP</td>
                                    <td class="center hidden-phone">6</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td class="hidden-phone">Win 98+ / OSX.2+</td>
                                    <td class="center hidden-phone">1.7</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td class="hidden-phone">Win 98+ / OSX.2+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td class="hidden-phone">Win 98+ / OSX.2+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td class="hidden-phone">Win 2k+ / OSX.3+</td>
                                    <td class="center hidden-phone">1.9</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td class="hidden-phone">OSX.2+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td class="hidden-phone">OSX.3+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td class="hidden-phone">Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="center hidden-phone">1.7</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td class="hidden-phone">Win 98SE+</td>
                                    <td class="center hidden-phone">1.7</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td class="hidden-phone">Win 98+ / OSX.2+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.1</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.2</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.3</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.4</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.5</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.5</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.6</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.6</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>
                                    <td class="hidden-phone">Win 98+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.7</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>
                                    <td class="hidden-phone">Win 98+ / OSX.1+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>
                                    <td class="hidden-phone">Win 98+ / OSX.2+</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Epiphany 2.20</td>
                                    <td class="hidden-phone">Gnome</td>
                                    <td class="center hidden-phone">1.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.2</td>
                                    <td class="hidden-phone">OSX.3</td>
                                    <td class="center hidden-phone">125.5</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.3</td>
                                    <td class="hidden-phone">OSX.3</td>
                                    <td class="center hidden-phone">312.8</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 2.0</td>
                                    <td class="hidden-phone">OSX.4+</td>
                                    <td class="center hidden-phone">419.3</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 3.0</td>
                                    <td class="hidden-phone">OSX.4+</td>
                                    <td class="center hidden-phone">522.1</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>OmniWeb 5.5</td>
                                    <td class="hidden-phone">OSX.4+</td>
                                    <td class="center hidden-phone">420</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>iPod Touch / iPhone</td>
                                    <td class="hidden-phone">iPod</td>
                                    <td class="center hidden-phone">420.1</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>S60</td>
                                    <td class="hidden-phone">S60</td>
                                    <td class="center hidden-phone">413</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.0</td>
                                    <td class="hidden-phone">Win 95+ / OSX.1+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td class="hidden-phone">Win 95+ / OSX.2+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.0</td>
                                    <td class="hidden-phone">Win 95+ / OSX.2+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.5</td>
                                    <td class="hidden-phone">Win 95+ / OSX.2+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.0</td>
                                    <td class="hidden-phone">Win 95+ / OSX.3+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.2</td>
                                    <td class="hidden-phone">Win 88+ / OSX.3+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.5</td>
                                    <td class="hidden-phone">Win 88+ / OSX.3+</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera for Wii</td>
                                    <td class="hidden-phone">Wii</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nokia N800</td>
                                    <td class="hidden-phone">N800</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nintendo DS browser</td>
                                    <td class="hidden-phone">Nintendo DS</td>
                                    <td class="center hidden-phone">8.5</td>
                                    <td class="center hidden-phone">C/A<sup>1</sup></td>
                                </tr>
                                <tr class="gradeC">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.1</td>
                                    <td class="hidden-phone">KDE 3.1</td>
                                    <td class="center hidden-phone">3.1</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.3</td>
                                    <td class="hidden-phone">KDE 3.3</td>
                                    <td class="center hidden-phone">3.3</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.5</td>
                                    <td class="hidden-phone">KDE 3.5</td>
                                    <td class="center hidden-phone">3.5</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 4.5</td>
                                    <td class="hidden-phone">Mac OS 8-9</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.1</td>
                                    <td class="hidden-phone">Mac OS 7.6-9</td>
                                    <td class="center hidden-phone">1</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.2</td>
                                    <td class="hidden-phone">Mac OS 8-X</td>
                                    <td class="center hidden-phone">1</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.4</td>
                                    <td class="hidden-phone">Embedded devices</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">A</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Dillo 0.8</td>
                                    <td class="hidden-phone">Embedded devices</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">X</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Links</td>
                                    <td class="hidden-phone">Text only</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">X</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td class="hidden-phone">Text only</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td class="hidden-phone">Windows Mobile 6</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td class="hidden-phone">PSP</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">C</td>
                                </tr>
                                <tr class="gradeU">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td class="hidden-phone">-</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone">U</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
@endsection
@section('external_script')
    <script type="text/javascript" language="javascript" src="{{url('backend/assets/advanced-datatable/media/js/jquery.js')}}"></script>
     <script type="text/javascript" language="javascript" src="{{url('backend/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>

    <script type="text/javascript">
      /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
          sOut += '</table>';

          return sOut;
      }

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#hidden-table-info thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#hidden-table-info tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#hidden-table-info').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[1, 'asc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#hidden-table-info tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
              }
          } );
      } );
  </script>
@endsection