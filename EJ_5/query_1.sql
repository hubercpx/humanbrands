--a. Se requiere desarrollar un query que consulte el total de consumo de un cliente
--específico agrupando los valores por año, mes y tipo de moneda de la compra.
SELECT TO_CHAR(detalle.fecha,'MM-YYYY'), cliente.NOMBRE ,  detalle.moneda_id, SUM(A.TOTAL) AS total
FROM detalle
INNER JOIN cliente ON detalle.cliente_id = cliente.id
WHERE cliente.id = '403' --ID DEL CLIENTE
GROUP BY cliente.nombre, detalle.moneda_id, TO_CHAR(detalle.fecha,'MM-YYYY')



