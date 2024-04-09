$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function removeRow(id, url)
{
    if(comfirm('Bạn có chắc chắn xóa'))
    {
        $.ajax({
            type : 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function (result){
                if (result.error === false){
                    alert(result.message);
                    lacation.reload();
                } else {
                    alert('Xóa lỗi vui lòng thử lại')
                }
            }
        })
    }
}
