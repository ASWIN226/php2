from tkinter import *
from tkinter import messagebox

kl=Tk()
kl.geometry('600x600')

kl.config(background='red')
menubar=Menu(kl)
file=Menu(menubar,tearoff=0)
menubar.add_cascade(label='file',menu=file)
file.add_command(label='new file',command=None)

a=input('enter your name : ')
def hello():
   
    messagebox.showinfo(f'hello {a}',f'welcome {a}')
    messagebox.showwarning(f'{a} you entered..','Admin ..error 309 package error...')
    


app=Button(command=hello,text=f'{a} click to see message')
app.pack(anchor=CENTER,fill=X)







kl.config(menu=menubar)








kl.mainloop()