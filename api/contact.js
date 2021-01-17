import express from 'express'
import nodemailer from 'nodemailer'

const TO = "aungyin@ansurs.co.jp"
// const TO = "info@ansurs.co.jp"

const app = express()
app.use(express.json())


app.get('/', function (req, res) {
  res.status(405).json({ error: 'Sorry! 405 Error!' })
})


app.post('', (req, res) => {

  console.log(req.body)

  sendMail(req.body['email'], req.body['subject'], req.body['text'])

  res.status(200).json({ 'message': 'Mail sent !!' })
})


const sendMail = (email, subject, text) => {

  /**
   * xserver
   */
  let transport = {
    host: "sv2122.xserver.jp",
    port: 465,//SSL（TLS）で送信する場合は465、使用しない場合は587
    secure: true,//trueの場合、サーバーへの接続時に接続はTLSを使用する
  }
  let transporter = nodemailer.createTransport(transport)

  let message = {
    from: email,
    to: TO, // 宛先
    subject: subject, // 件名
    text: text // 本文
  }

  try {
    transporter.sendMail(message, function(error, success) {
      if(error){
        console.log("送信に失敗しました");
        console.log(error.message);
        return;
      }        
      console.log("送信に成功しました");
      console.log(success)
    })
  } catch(e) {
    console.log("例外が発生しました",e);
  }
}

module.exports = {
  path: '/api/contact',
  handler: app
}