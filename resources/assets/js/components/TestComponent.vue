<template>

    <div>
        <section id="main-content">
            <section class="wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Dynamic Table
                                        <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-cog"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="adv-table">
                                            <table  class="display table table-bordered table-striped" id="dynamic-table">

                                                <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th class="hidden-phone">Engine version</th>
                                                    <th class="hidden-phone">CSS grade</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="gradeX">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 4.0</td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">4</td>
                                                    <td class="center hidden-phone">X</td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.0</td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">5</td>
                                                    <td class="center hidden-phone">C</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.5</td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">5.5</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 6</td>
                                                    <td>Win 98+</td>
                                                    <td class="center hidden-phone">6</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 7</td>
                                                    <td>Win XP SP2+</td>
                                                    <td class="center hidden-phone">7</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>AOL browser (AOL desktop)</td>
                                                    <td>Win XP</td>
                                                    <td class="center hidden-phone">6</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Firefox 1.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center hidden-phone">1.7</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeU">
                                                    <td>Other browsers</td>
                                                    <td>All others</td>
                                                    <td>-</td>
                                                    <td class="center hidden-phone">-</td>
                                                    <td class="center hidden-phone">U</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th class="hidden-phone">Engine version</th>
                                                    <th class="hidden-phone">CSS grade</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
            </section>
        </section>
    </div>

</template>



<script>
    export default{
        data(){
            return{
                articles:[],
                edit:''
            }
        }
    }

</script>