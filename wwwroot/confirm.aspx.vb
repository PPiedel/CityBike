﻿Public Class confirm
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Page.IsPostBack Then
            'Strona zostala zaladowana poprzez klikniecie w przycisk
        Else
            kosztLabel.Text = Session("koszt")
            platnoscLabel.Text = Session("płatność")
            kosztLabel.Visible = True
            Session.Contents.RemoveAll()
        End If
    End Sub

    Sub cofnij_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Response.Redirect("shop.aspx")
    End Sub

End Class