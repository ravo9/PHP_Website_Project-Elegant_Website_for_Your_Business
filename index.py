from flask import Flask, render_template, request, redirect
import smtplib
from datetime import datetime

app = Flask(__name__)

@app.route("/")
def index():
  return render_template('index.html')

@app.route("/order", methods=['POST', 'GET'])
def order():
  if request.method == 'POST':

    date = datetime.now().strftime("%d.%m.%Y %H:%M")
    try:
        website_type = request.form['kind']
    except:
        website_type = "not_chosen"
    dynamic_elements = request.form.getlist('elements')
    other_dynamic_elements = request.form['other_dynamic_elements']
    desc = request.form['desc']
    spec = request.form['spec']
    try:
        hosting_option = request.form['hosting_option']
    except:
        hosting_option = "not_chosen"
    name = request.form['name']
    email = request.form['email']
    phone = request.form['phone']

    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.starttls()
    server.login("elegantwebsitesforyou@gmail.com", "hanza2017")

    msg = "\n"
    msg += "Order Date: " + date + "\n" + "\n"

    msg += "Customer's Name: " + name + "\n"
    msg += "Contact e-mail: " + email + "\n"
    msg += "Contact number: " + phone + "\n"+ "\n"

    msg += "Description: " + desc + "\n"+ "\n"

    msg += "Technical details: " + spec + "\n" + "\n"

    msg += "Website type: " + website_type + "\n"
    msg += "Desired dynamic elements: "
    for e in dynamic_elements:
        msg += e + ", "
    msg += "\n"
    msg += "Other desired dynamic elements: " + other_dynamic_elements + "\n"
    msg += "Hosting and domain included: " + hosting_option + "\n"
    
    server.sendmail("Elegant Websites for Your Business", "rafalozog@gmail.com", msg)
    server.quit()

    return render_template('confirmation.html')

  else:

    return render_template('order.html')


if __name__ == "__main__":
  app.run(host="0.0.0.0", port=5000)

