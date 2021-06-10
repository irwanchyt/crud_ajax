function ajaxData(){
    $.ajax({

        url:'/siswa',
        type: 'GET',
        dataType: 'json',
        beforeSend: function(){
            $('#t_siswa tbody').html(`
    
                <tr>
                    <td colspan="4" class="text-center">
                       <h4> Loading Data Siswa...</h4>
                    </td>
                </tr>
            
            `)
        },
        success: function(res){
    
            if(res.results.length === 0){
    
                $('#t_siswa tbody').html(`
    
                    <tr>
                        <td  colspan="4" class="text-area">Data Not Found</td>
                    </tr>
                
                `)
    
            }else{
                // alert(res.message)
                let rowData = res.results.map(v =>{
                    return `
                        <tr>
    
                            <td>${v.name}</td>
                            <td>${v.alamat}</td>
                            <td>${v.jenis_kelamin}</td>
                            <td>${v.id}</td>
                        
                        </tr>
                    
                    `
                }).join('')
    
                $('#t_siswa tbody').html(rowData)
                $('#t_siswa tfoot').html(`
    
                    <tr>
                        <td colspan="4" class="text-right">
                            <b>Total Data : ${res.results.length}</b>
                        </td>
                    </tr>
                
                `)
                
            }
    
            },
            error: function(err){
    
                $('#t_siswa tbody').html(`
    
                    <tr>
                        <td colspan="4" class="text-center">
                            <b class="text-danger"> Internal Server Error!</b>
                        </td>
                    </tr>
    
                `)
    
            },
            complete: function(){
    
            }
       })

}



$(function(){

   ajaxData()

   $('#btn_reload').on('click',function(){

        ajaxData()
   
   })


   $('#btn_add').on('click',function(){
       $('#form_add')[0].reset()
       $('#modal_add').modal('show')

   })

   $('#form_add').validate({
       submitHandler: function(form){
            $.ajax({
                url:'siswa/create',
                type:'POST',
                data: $(form).serialize(),
                beforeSend: function(){

                    $('#btn_save').prop('disabled',true).html('loading...')
                },
                success: function(res){
                    ajaxData()
                    alert(res.message)                  
                    $('#modal_add').modal('hide')
                    

                },
                error: function(err){

                    alert(err.responseJSON.message)
                },
                complete: function(){

                    $('#btn_save').prop('disabled',false).html('loading...')
                    $('#btn_save').html('save')

                }


            })
       }
   })
    
})