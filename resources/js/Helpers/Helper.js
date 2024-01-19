class Helper {

    log(err_data ) {
        let log_title = ''
        let log_message = ''

        if ( typeof err_data == "string" || typeof err_data == "number") {
            err_data = String(err_data)

            let tmp = err_data.replace(/\r/, '')
            log_message = tmp.replace(/((.|\n)+<title>(.*)<\/title>(.|\n)+?)/, "$3")

        } else if ( typeof err_data == "undefined" ) {
            log_message = 'Undefined.'
        } else {
            if ( 'error' in err_data ) {
                log_title = err_data.error + ': '

            } else if ( 'exception' in err_data ) {
                log_title = err_data.exception.split('\\').slice(-1) + ': '
            }

            if ( 'message' in err_data ) {
                log_message = err_data.message
            }
        }
        console.log( '!!! ' + log_title + log_message )

    }
}

export default Helper = new Helper()
