Public Class summary
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Session.Count <> 0 Then
            For Each keyName In Session.Keys
                carts_list_box.Items.Add(Session(keyName))
            Next
        Else
            komunikatLabel.Text = "Nie wybrano żadnych produktów"
            carts_list_box.Items.Clear()
            carts_list_box.Visible = False
        End If


    End Sub

End Class