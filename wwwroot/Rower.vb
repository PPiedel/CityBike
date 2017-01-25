Public Class Rower
    Public id As Integer
    Public type As String
    Public price As Integer
    Public descrition As String

    Sub New(ByVal bike_id As Integer, ByVal bike_type As String, ByVal bike_price As Integer, ByVal bike_description As String)
        id = bike_id
        type = bike_type
        price = bike_price
        descrition = bike_description
    End Sub

    Public Overrides Function ToString() As String
        Return descrition + " : " + Convert.ToString(price) + "zł"
    End Function

    Public Function GetPrice() As Integer
        Return price
    End Function
End Class
