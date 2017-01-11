Public Class contact
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If IsPostBack Then
            Dim name As String = TextBox1.Text

            Dim surname As String = TextBox2.Text

            Dim email As String = TextBox3.Text

            Dim message As String = TextBox4.Text

            Label1.Text = "Dziękujemy za wysłanie wiadomości. Otrzymaliśmy następujące informacje : <br> Imię :  " & name & "<br> Nazwisko : " & surname & "<br> Email : " & email & "<br> Wiadomosc : " & message & " "

            Label1.Visible = True
        End If
    End Sub

End Class