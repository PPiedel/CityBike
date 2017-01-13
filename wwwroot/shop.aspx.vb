

Imports System.Collections
Public Class shop
    Inherits System.Web.UI.Page
    Dim Rowery_Miejskie_Table, Rowery_Gorskie_Table, Rowery_Dzieciece_Table As New Hashtable()
    Dim Rower1, Rower2, Rower3, Rower4, Rower5, Rower6, Rower7, Rower8 As Rower
    Dim MessageBox As Object
    Dim liczba_produktow As Integer



    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Page.IsPostBack Then
            'Strona zostala zaladowana poprzez klikniecie w przycisk
        Else
            liczba_produktow = 0

            'Ustaw widocznosc checkboxlist
            rowery_miejskie_checkboxlist.Visible = True
            rowery_gorskie_checkboxlist.Visible = False
            rowery_dzieciece_checkboxlist.Visible = False


            'Strona zostala zaladowana pierwszy raz
            Rower1 = New Rower(1, "rower_miejski", 500, "Mały rower miejski")
            Rower2 = New Rower(2, "rower_miejski", 600, "Sredniej wielkości rower miejski ")
            Rower3 = New Rower(3, "rower_miejski", 700, "Duży rower miejski dla dwóch osób")

            Rower4 = New Rower(4, "rower_gorski", 700, "Mały rower górski")
            Rower5 = New Rower(5, "rower_gorski", 800, "Rower górski o aluminiowej konstrukcji")
            Rower6 = New Rower(6, "rower_gorski", 800, "Rower górski o stalowej kontrukcji")

            Rower7 = New Rower(7, "rower_dzieciecy", 200, "Roweryk dziecięcy")
            Rower8 = New Rower(8, "rower_dzieciecy", 350, "Rower średniej wielkości dla dzieci")

            Try
                Rowery_Miejskie_Table.Add(Rower1.id, Rower1)
                Rowery_Miejskie_Table.Add(Rower2.id, Rower2)
                Rowery_Miejskie_Table.Add(Rower3.id, Rower3)

                Rowery_Gorskie_Table.Add(Rower4.id, Rower4)
                Rowery_Gorskie_Table.Add(Rower5.id, Rower5)
                Rowery_Gorskie_Table.Add(Rower6.id, Rower6)

                Rowery_Dzieciece_Table.Add(Rower7.id, Rower7)
                Rowery_Dzieciece_Table.Add(Rower8.id, Rower8)

                rowery_miejskie_checkboxlist.DataSource = Rowery_Miejskie_Table
                rowery_miejskie_checkboxlist.DataValueField = "Key"
                rowery_miejskie_checkboxlist.DataTextField = "Value"
                rowery_miejskie_checkboxlist.DataBind()

                rowery_gorskie_checkboxlist.DataSource = Rowery_Gorskie_Table
                rowery_gorskie_checkboxlist.DataValueField = "Key"
                rowery_gorskie_checkboxlist.DataTextField = "Value"
                rowery_gorskie_checkboxlist.DataBind()


                rowery_dzieciece_checkboxlist.DataSource = Rowery_Dzieciece_Table
                rowery_dzieciece_checkboxlist.DataValueField = "Key"
                rowery_dzieciece_checkboxlist.DataTextField = "Value"
                rowery_dzieciece_checkboxlist.DataBind()

            Catch ae As ArgumentException
                MessageBox.Show("Duplicate Key")
            End Try
        End If

    End Sub

    Sub Index_Changed(ByVal sender As Object, ByVal e As System.EventArgs)


        If RadioButtonList1.SelectedItem.Value = "1" Then
            rowery_miejskie_checkboxlist.Visible = True
            rowery_gorskie_checkboxlist.Visible = False
            rowery_dzieciece_checkboxlist.Visible = False

        ElseIf RadioButtonList1.SelectedItem.Value = "2" Then
            rowery_miejskie_checkboxlist.Visible = False
            rowery_gorskie_checkboxlist.Visible = True
            rowery_dzieciece_checkboxlist.Visible = False

        ElseIf RadioButtonList1.SelectedItem.Value = "3" Then
            rowery_miejskie_checkboxlist.Visible = False
            rowery_gorskie_checkboxlist.Visible = False
            rowery_dzieciece_checkboxlist.Visible = True
        End If
    End Sub


    Sub Add_To_Basket_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        If RadioButtonList1.SelectedItem.Value = "1" Then
            For Each item As ListItem In rowery_miejskie_checkboxlist.Items
                If (item.Selected) Then
                    Session.Add(item.Value, item.Text)
                   
                End If
            Next
        ElseIf RadioButtonList1.SelectedItem.Value = "2" Then
            For Each item As ListItem In rowery_gorskie_checkboxlist.Items
                If (item.Selected) Then
                    Session.Add(item.Value, item.Text)
                End If
            Next

        ElseIf RadioButtonList1.SelectedItem.Value = "3" Then
            For Each item As ListItem In rowery_dzieciece_checkboxlist.Items
                If (item.Selected) Then
                    Session.Add(item.Value, item.Text)
                End If
            Next
        End If
        liczba_produktow = Session.Count
        liczba_w_koszyku_label.Text = Convert.ToString(liczba_produktow)
    End Sub

    Sub Order_Summary_Click(ByVal sender As Object, ByVal e As System.EventArgs)
        Response.Redirect("summary.aspx")
    End Sub




End Class

