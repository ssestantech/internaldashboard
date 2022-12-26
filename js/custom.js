$(document).ready(function () {
    $('.pending-data').DataTable({
        paging: false,
        // ordering: false,
        info: false,
        searching: false,
        scrollY: '400px',
        scrollCollapse: true,
    });
    $('.restapi-data').DataTable({
        paging: false,
        // ordering: false,
        info: false,
        searching: false,
    });
    $('.clients-data').DataTable({
        paging: false,
        // ordering: false,
        info: false,
        searching: false,
        scrollY: '400px',
        scrollCollapse: true,
    });
    $('.toggle-layout').click(function(){
        let dataId = $(this).attr('data-id');
        if(dataId=="grid-view"){
            $('.list-view').hide();
            $('#'+dataId).show();
            $(this).attr('data-id','list-view');
        }
        else {
            $('.grid-view').hide();
            $('#'+dataId).show();
            $(this).attr('data-id','grid-view');
            //dataId="grid-view";
        }
    });
    $('.datepicker').datepicker();
});