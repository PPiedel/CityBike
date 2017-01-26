Public Class summary
    Inherits System.Web.UI.Page

	
    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
		If Page.IsPostBack Then
            'Strona zostala zaladowana poprzez klikniecie w przycisk
        Else
		
	
		kosztLabel.Text = Session("koszt")
		kosztLabel.Visible=True
        If Session.Count <> 0 Then
                For Each keyName In Session.Keys
                    If (keyName.Equals("koszt") = False) Then
                        carts_list_box.Items.Add(Session(keyName))
                    End If
                Next
        Else
            komunikatLabel.Text = "Nie wybrano żadnych produktów"
            carts_list_box.Items.Clear()
            carts_list_box.Visible = False
			zatwierdz_button.Visible = False
        End If
        End If

		
    End Sub

	Sub Index_Changed(ByVal sender As Object, ByVal e As System.EventArgs)

    End Sub

    Sub zatwierdz_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        If (RadioButtonList2.SelectedItem.Value).Equals("2") Then
            Session("płatność") = "Gotówką"
        ElseIf (RadioButtonList2.SelectedItem.Value).Equals("1") Then
            Session("płatność") = "Przelewem"
        End If
        Response.Redirect("confirm.aspx")

    End Sub

	Sub cofnij_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Response.Redirect("shop.aspx")
    End Sub
	
End Class